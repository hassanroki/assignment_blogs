<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    // dashboard
    public function dashboard(){
        $totalCategory = Category::count();
        $totalBlog = Blog::count();
        return view('admin.dashboard', compact(['totalCategory', 'totalBlog']));
    }
}
