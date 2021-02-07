<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Tags;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;

class PostController extends Controller
{
    
    public function index()
    {
        // Get 5 latest posts
        $posts = Post::orderBy('id', 'DESC')->limit(9)->get();
        return view('welcome', ['posts' => $posts]);
    }

    public function show($tag)
    {
        /*
            Get the $tag var from the uri, converting it to lowercase just in case the users types FiNaNcE when he searches for "finance" post/news
        */
            $tag = strtolower($tag);
        /*
            Since we have a breaking-news route and a 'breaking-news' tag we need to replace the
            fetched route name dashes with white space in order to retrieve posts with an tag that has dashes
        */
            $tag = preg_replace('/\-/', ' ', $tag);
        /*
            Since the route contains a tag name we search for the post/news using the Tags model's defined hasMany relationship.
            The request is 404 if the tag does not exist!
        */
            $posts = Tags::where('name', $tag)->firstOrFail()->posts;
            return view('post.show', ['posts' => $posts]);
    }
}
