<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class BlogController extends Controller
{

    public function index()
    {
        $blogs = Blog::latest()->paginate(6); // 6 per halaman
        return view('blog.index', compact('blogs'));
    }

    public function show($slug)
    {
        $blog = Blog::where('slug', $slug)->firstOrFail();
        return view('blog.show', compact('blog'));
    }
}

