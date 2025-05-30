<?php

namespace App\Http\Controllers;
use App\Models\Posts;

use Illuminate\Http\Request;

class frontendController extends Controller
{
    public function home()
    {
        $certifiates = Posts::where('status', 'PUBLISHED')
        ->where('category_id', 5)
        ->get();

        $projects = Posts::where('status', 'PUBLISHED') 
        ->where('category_id', 3)
        ->get();
        return view('frontend.pages.home', compact('certifiates', 'projects'));
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
                     ->where('category_id', 5)
                     ->get();
        return view('frontend.pages.certifiate-grid', compact('posts'));
    }

    public function certifiateDetail($slug)
    {
        $post = Posts::where('slug', $slug)
                    ->where('status', 'PUBLISHED')
                    ->where('category_id', 5)
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

    public function projectsGrid()
    {
        $projects = Posts::where('status', 'PUBLISHED')
        ->where('category_id', 3)
        ->get();
        return view('frontend.pages.projects-grid', compact('projects'));
    }

    public function projectDetail($slug)
    {
        $projects = Posts::where('slug', $slug)
                    ->where('status', 'PUBLISHED')
                    ->where('category_id', 3)
                    ->firstOrFail();

        // Format meta description with fallbacks
        $metaDescription = $projects->excerpt ?? $projects->meta_description ?? "View details of {$projects->title} project by Utsav Gohel.";
        
        // Format meta keywords with fallbacks
        $metaKeywords = $projects->meta_keywords ?? $projects->tech_stack ?? "project, {$projects->title}, utsav gohel, portfolio";

        return view('frontend.pages.projects-detail', [
            'projects' => $projects,
            'meta_title' => "{$projects->title} - Project by Utsav Gohel",
            'meta_description' => $metaDescription,
            'meta_keywords' => $metaKeywords,
            'meta_image' => asset('storage/' . $projects->image)
        ]);
    }
}
