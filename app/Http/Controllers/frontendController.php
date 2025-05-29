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
        $posts = Posts::all();
        return view('frontend.pages.certifiate-grid', compact('posts'));
    }



}
