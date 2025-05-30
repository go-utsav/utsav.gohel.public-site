<?php

namespace App\Http\Controllers;

use App\Models\Posts;
use Carbon\Carbon;

class SitemapController extends Controller
{
    public function index()
    {
        // Get all published projects
        $projects = Posts::where('status', 'PUBLISHED')
            ->where('category_id', 3)
            ->get();

        // Get all published certificates
        $certificates = Posts::where('status', 'PUBLISHED')
            ->where('category_id', 5)
            ->get();

        // Set content type
        return response()->view('sitemap', [
            'projects' => $projects,
            'certificates' => $certificates,
            'now' => Carbon::now()->tz('UTC')->toAtomString()
        ])->header('Content-Type', 'text/xml');
    }
} 