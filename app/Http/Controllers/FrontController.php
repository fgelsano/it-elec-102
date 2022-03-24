<?php

namespace App\Http\Controllers;

use App\Blog;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
        $blogs = Blog::all();
        return view('blog-index', compact('blogs'));
    }
}
