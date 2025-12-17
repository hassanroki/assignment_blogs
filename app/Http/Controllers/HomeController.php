<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    // index
    public function index()
    {
        $categories = Category::withCount('blogs')->get();
        $latestFourCategories = Category::latest()->take(4)->get();
        $latestThreeCategories = Category::latest()->take(3)->get();
        $blogs = Blog::with('category')->latest()->take(8)->get();
        $featuredBlog = Blog::with('category')
            ->where('isFeature', '1')
            ->first();
        return view('index', compact('categories', 'blogs', 'latestFourCategories', 'latestThreeCategories', 'featuredBlog'));
    }


    // category
    public function category($category_id)
    {
        $latestFourCategories = Category::latest()->take(4)->get();
        $latestThreeCategories = Category::latest()->take(3)->get();
        $category = Category::findOrFail($category_id);
        $categoryWiseBlogs = Blog::with('category')
            ->where('category_id', $category_id)
            ->latest()
            ->get();

        $otherCategories = Category::where('id', '!=', $category_id)->get();

        return view('frontend.categories.index', compact('category', 'categoryWiseBlogs', 'otherCategories', 'latestFourCategories', 'latestThreeCategories'));
    }




    // Blog
    public function blogPost($id)
    {
        $latestFourCategories = Category::latest()->take(4)->get();
        $latestThreeCategories = Category::latest()->take(3)->get();
        $blog = Blog::with('category')->findOrFail($id);

        // Related blogs (same category, except current)
        $relatedBlogs = Blog::where('category_id', $blog->category_id)
            ->where('id', '!=', $id)
            ->latest()
            ->take(6)
            ->get();

        return view('frontend.blogs.list', compact('blog', 'relatedBlogs', 'latestFourCategories', 'latestThreeCategories'));
    }
}
