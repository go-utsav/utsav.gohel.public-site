<?php

namespace App\Http\Controllers;
use App\Models\Posts;

use Illuminate\Http\Request;

class frontendController extends Controller
{
    public function home()
    {
        return view('frontend.pages.home');
    }

    public function about()
    {
        return view('frontend.pages.about');
    }

    public function contact()
    {
        return view('frontend.pages.contact');
    }

    public function certifiateGrid()
    {
        $posts = Posts::where('status', 'PUBLISHED')
                     ->get();
        return view('frontend.pages.certifiate-grid', compact('posts'));
    }

    public function certifiateDetail($slug)
    {
        $post = Posts::where('slug', $slug)
                    ->where('status', 'PUBLISHED')
                    ->firstOrFail();

        // Format meta description with fallbacks
        $metaDescription = $post->excerpt ?? $post->meta_description ?? "View details of {$post->title} certification.";
        
        // Format meta keywords with fallbacks
        $metaKeywords = $post->meta_keywords ?? "certification, {$post->title}, cloud certification";

        return view('frontend.pages.certifiate-detail', [
            'post' => $post,
            'meta_title' => "{$post->title} - Utsav Gohel",
            'meta_description' => $metaDescription,
            'meta_keywords' => $metaKeywords,
            'meta_image' => asset('storage/' . $post->image)
        ]);
    }
}
