<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('home', compact('posts'));
    }

    public function slug($slug)
    {
        $post = Post::where('slug', $slug)->first();
        return view('view', compact('post'));
    }
}
