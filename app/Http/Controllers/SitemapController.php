<?php

namespace App\Http\Controllers;

use Illuminate\Http\Response;

class SitemapController extends Controller
{
    public function index()
    {
        $content = view('sitemap')->render();
        
        return response($content)
            ->header('Content-Type', 'text/xml')
            ->header('Cache-Control', 'public, max-age=43200'); // Cache for 12 hours
    }
} 