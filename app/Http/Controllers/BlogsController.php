<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;

class BlogsController extends Controller
{
    public function index()
    {
        return view('blogs.add');
    }

    public function create(Request $request)
    {
        $blog = new Blog;

        $blog->title = $request->input('blog-title');
        $blog->body = $request->input('blog-body');
        $blog->thumbnail = $request->input('blog-image');
        $blog->user_id = auth()->user()->id;

        $blog->save();

        return redirect()->route('dashboard');
    }
}
