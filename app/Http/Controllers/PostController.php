<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    
    public function index()
    {
        // Get 5 latest posts
        $posts = Post::orderBy('id', 'DESC')->limit(9)->get();
        return view('welcome', ['posts' => $posts]);
    }
}
