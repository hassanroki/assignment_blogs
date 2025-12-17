<?php

namespace App\Http\Controllers;

use App\Models\NewsLetter;
use Illuminate\Http\Request;

class NewsLetterController extends Controller
{
    // list
    public function list()
    {
        $newsLetters = NewsLetter::get();
        return view('admin.newsletter.list', compact('newsLetters'));
    }

    public function newsLetterStore(Request $request)
    {
        $request->validate([
            'email' => 'required|email|unique:news_letters,email',
        ]);

        NewsLetter::create([
            'email' => $request->email,
        ]);

        return response()->json([
            'status' => 'success',
            'message' => 'Thank you for subscribing!',
        ]);
    }

    public function destroy($id)
    {
        $delete = NewsLetter::findOrFail($id);
        $delete->delete();
        return redirect()->back()->with('Deleted Successfully!');
    }
}
