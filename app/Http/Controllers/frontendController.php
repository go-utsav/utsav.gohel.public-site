<?php

namespace App\Http\Controllers;
use App\Models\Posts;
use App\Models\Projects;
use App\Models\CaseStudy;
use App\Models\Testimonial;
use App\Models\QuickLink;

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

        $caseStudies = Projects::where('featured', 1)->get();

        $testimonials = Testimonial::orderBy('display_order')
        ->take(3)
        ->get();

        $quickLinks = QuickLink::where('is_active', true)
            ->orderBy('display_order')
            ->get();
        
        return view('frontend.pages.home', compact('certifiates', 'projects', 'caseStudies', 'testimonials', 'quickLinks'));
    }




    public function about()
    {
        $events = Posts::where('status', 'PUBLISHED')
                     ->where('category_id', 6)
                     ->get();
        return view('frontend.pages.about', compact('events'));
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

    public function serviceGrid()
    {
        $posts = Posts::where('status', 'PUBLISHED')
                     ->where('category_id', 7)
                     ->get();
        return view('frontend.pages.service-grid', compact('posts'));
    }

    public function serviceDetail($slug)
    {
        $post = Posts::where('slug', $slug)
                    ->where('status', 'PUBLISHED')
                    ->where('category_id', 7)
                    ->firstOrFail();

        // Format meta description with fallbacks
        $metaDescription = $post->excerpt ?? $post->meta_description ?? "View details of {$post->title} certification.";
        
        // Format meta keywords with fallbacks
        $metaKeywords = $post->meta_keywords ?? "certification, {$post->title}, cloud certification";

        return view('frontend.pages.service-detail', [
            'post' => $post,
            'meta_title' => "{$post->title} - Utsav Gohel",
            'meta_description' => $metaDescription,
            'meta_keywords' => $metaKeywords,
            'meta_image' => asset('storage/' . $post->image)
        ]);
    }


    public function eventGrid()
    {
        $posts = Posts::where('status', 'PUBLISHED')
                     ->where('category_id', 6)
                     ->get();
        return view('frontend.pages.event-grid', compact('posts'));
    }

    public function eventDetail($slug)
    {
        $post = Posts::where('slug', $slug)
                    ->where('status', 'PUBLISHED')
                    ->where('category_id', 6)
                    ->firstOrFail();

        // Format meta description with fallbacks
        $metaDescription = $post->excerpt ?? $post->meta_description ?? "View details of {$post->title} certification.";
        
        // Format meta keywords with fallbacks
        $metaKeywords = $post->meta_keywords ?? "certification, {$post->title}, cloud certification";

        return view('frontend.pages.events-detail', [
            'post' => $post,
            'meta_title' => "{$post->title} - Utsav Gohel",
            'meta_description' => $metaDescription,
            'meta_keywords' => $metaKeywords,
            'meta_image' => asset('storage/' . $post->image)
        ]);
    }

    // case study grid
    public function caseStudyGrid()
    {
        $caseStudies = Projects::all();
        return view('frontend.pages.casestudy-grid', compact('caseStudies'));
    }

    public function caseStudyDetail($slug)
    {
        $caseStudy = Projects::where('slug', $slug)->firstOrFail();

        // Format meta description with fallbacks
        $metaDescription = $caseStudy->seo_description ?? $caseStudy->description ?? "View details of {$caseStudy->title} case study by Utsav Gohel.";
        
        // Format meta keywords with fallbacks
        $metaKeywords = $caseStudy->seo_keywords ?? implode(', ', array_merge(
            ['case study', $caseStudy->title, 'utsav gohel'],
            explode(',', $caseStudy->tech_stack)
        ));

        return view('frontend.pages.casestudy-detail', compact('caseStudy'));
    }

    public function siteMap()
    {
        // Get all published projects
        $projects = Posts::where('status', 'PUBLISHED')
            ->where('category_id', 3)
            ->orderBy('created_at', 'desc')
            ->get();

        // Get all published certificates
        $certificates = Posts::where('status', 'PUBLISHED')
            ->where('category_id', 5)
            ->orderBy('created_at', 'desc')
            ->get();

        return view('frontend.pages.site-map', [
            'projects' => $projects,
            'certificates' => $certificates,
            'meta_title' => 'Site Map - Utsav Gohel',
            'meta_description' => 'Complete overview of all pages, projects, and certifications on Utsav Gohel\'s portfolio.',
            'meta_keywords' => 'site map, projects, certifications, portfolio, utsav gohel'
        ]);
    }
}
