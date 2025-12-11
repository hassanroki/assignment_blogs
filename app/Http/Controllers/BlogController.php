<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
{
    // All blogs
    public function index()
    {
        $blogs = Blog::with('category')->latest()->get();
        return view('admin.blogs.index', compact('blogs'));
    }

    // Create form
    public function create()
    {
        $categories = Category::all();
        return view('admin.blogs.create', compact('categories'));
    }

    // Store
    public function store(Request $request)
    {
        $request->validate([
            'category_id'   => 'required|exists:categories,id',
            'title'         => 'required|max:255',
            'short_desc'    => 'required|max:500',
            'full_desc'     => 'required|min:50',
            'image'         => 'nullable|image',
        ]);

        $imagePath = null;

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('blogs', 'public');
        }

        Blog::create([
            'category_id'   => $request->category_id,
            'image'         => $imagePath,
            'title'         => $request->title,
            'short_desc'    => $request->short_desc,
            'author'        => $request->author ?? 'Admin',
            'read_time'     => $request->read_time,
            'published_date' => $request->published_date,
            'full_desc'     => $request->full_desc,
        ]);

        return redirect()->route('blogs.index')->with('success', 'Blog Created Successfully!');
    }

    // Edit
    public function edit($id)
    {
        $blog = Blog::findOrFail($id);
        $categories = Category::all();

        return view('admin.blogs.edit', compact('blog', 'categories'));
    }

    // Update
    public function update(Request $request, $id)
    {
        $blog = Blog::findOrFail($id);

        $request->validate([
            'category_id'   => 'required|exists:categories,id',
            'title'         => 'required|max:255',
            'short_desc'    => 'required|max:500',
            'full_desc'     => 'required|min:50',
            'image'         => 'nullable|image',
        ]);

        $imagePath = $blog->image;

        if ($request->hasFile('image')) {
            // Delete old image if exists
            if ($blog->image && Storage::disk('public')->exists($blog->image)) {
                Storage::disk('public')->delete($blog->image);
            }

            // Store new image
            $imagePath = $request->file('image')->store('blogs', 'public');
        }

        $blog->update([
            'category_id'    => $request->category_id,
            'image'          => $imagePath,
            'title'          => $request->title,
            'short_desc'     => $request->short_desc,
            'author'         => $request->author,
            'read_time'      => $request->read_time,
            'published_date' => $request->published_date,
            'full_desc'      => $request->full_desc,
        ]);

        return redirect()->route('blogs.index')->with('success', 'Blog Updated Successfully!');
    }


    // Delete
    public function destroy($id)
    {
        $blog = Blog::findOrFail($id);

        if ($blog->image && file_exists(public_path('storage/' . $blog->image))) {
            unlink(public_path('storage/' . $blog->image));
        }

        $blog->delete();

        return redirect()->route('blogs.index')->with('success', 'Blog Deleted Successfully!');
    }
}
