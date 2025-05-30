<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class AdminContactNotification extends Mailable
{
    use Queueable, SerializesModels;

    public $firstName;
    public $lastName;
    public $email;
    public $phone;
    public $projectType;
    public $message;

    public function __construct($data)
    {
        $this->firstName = $data['first_name'];
        $this->lastName = $data['last_name'];
        $this->email = $data['email'];
        $this->phone = $data['phone'];
        $this->projectType = $data['project_type'];
        $this->message = $data['message'];
    }

    public function build()
    {
        return $this->subject('New Contact Form Submission - ' . $this->firstName . ' ' . $this->lastName)
                    ->view('emails.contact.admin-notification');
    }
} 