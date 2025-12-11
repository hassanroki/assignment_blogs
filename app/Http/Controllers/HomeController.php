<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    // index
    public function index(){
        return view('index');
    }

    // category
    public function category(){
        return view('frontend.categories.index');
    }

    // Blog
    public function blogPost(){
        return view('frontend.blogs.list');
    }
}
