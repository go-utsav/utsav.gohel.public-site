<?php

namespace App\Http\Controllers;

use App\Models\ContactMessage;
use App\Mail\ContactThankYou;
use App\Mail\AdminContactNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        // Validate form data
        $validator = Validator::make($request->all(), [
            'firstName' => 'required|string|max:255',
            'lastName' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:20',
            'projectType' => 'required|string|max:255',
            'message' => 'required|string|max:500',
            'g-recaptcha-response' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors' => $validator->errors()
            ], 422);
        }

        // Verify reCAPTCHA
        try {
            $recaptcha = $request->input('g-recaptcha-response');
            $url = 'https://www.google.com/recaptcha/api/siteverify';
            $data = [
                'secret' => config('services.recaptcha.secret_key'),
                'response' => $recaptcha,
                'remoteip' => $request->ip()
            ];

            $options = [
                'http' => [
                    'header' => "Content-type: application/x-www-form-urlencoded\r\n",
                    'method' => 'POST',
                    'content' => http_build_query($data),
                    'timeout' => 10
                ]
            ];

            $context = stream_context_create($options);
            $result = file_get_contents($url, false, $context);

            if ($result === false) {
                throw new \Exception('Failed to verify reCAPTCHA');
            }

            $response = json_decode($result);

            if (!$response || !$response->success) {
                return response()->json([
                    'success' => false,
                    'errors' => ['recaptcha' => 'Please complete the reCAPTCHA verification.']
                ], 422);
            }
        } catch (\Exception $e) {
            Log::error('reCAPTCHA verification failed', [
                'error' => $e->getMessage(),
                'data' => $request->all()
            ]);
            return response()->json([
                'success' => false,
                'errors' => ['recaptcha' => 'Failed to verify reCAPTCHA. Please try again.']
            ], 422);
        }

        DB::beginTransaction();
        
        try {
            // Store the message first
            $contactMessage = ContactMessage::create([
                'first_name' => $request->firstName,
                'last_name' => $request->lastName,
                'email' => $request->email,
                'phone' => $request->phone,
                'project_type' => $request->projectType,
                'message' => $request->message,
                'is_read' => false
            ]);

            DB::commit();

            // Send emails after successful database save
            try {
                // Send thank you email to user
                Mail::to($request->email)
                    ->send(new ContactThankYou($request->firstName));

                // Send notification to admin
                Mail::to('utsavgohel.ug@gmail.com')
                    ->send(new AdminContactNotification([
                        'first_name' => $request->firstName,
                        'last_name' => $request->lastName,
                        'email' => $request->email,
                        'phone' => $request->phone,
                        'project_type' => $request->projectType,
                        'message' => $request->message,
                    ]));
            } catch (\Exception $e) {
                // Log email sending errors but don't fail the request
                Log::error('Failed to send contact form emails', [
                    'error' => $e->getMessage(),
                    'contact_id' => $contactMessage->id
                ]);
            }

            return response()->json([
                'success' => true,
                'message' => 'Thank you for your message. We will get back to you soon!'
            ]);

        } catch (\Exception $e) {
            DB::rollBack();
            
            Log::error('Failed to save contact message', [
                'error' => $e->getMessage(),
                'data' => $request->all()
            ]);

            return response()->json([
                'success' => false,
                'errors' => ['general' => 'An error occurred while processing your message.']
            ], 500);
        }
    }
} 