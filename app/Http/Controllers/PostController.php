<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Tags;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;

class PostController extends Controller
{

    // RESTfull conventions

    // index -> get request -> all articles DONE

    // show -> get request -> find by post id DONE

    // store -> post reuqest -> create article using request data -> redirect

    // update -> put request -> find post by id -> update data -> redirect

    // delete -> delete request -> find post id -> delete post -> redirect
    
    public function index()
    {
        // Display all posts
        return view('post.index', ['posts' => Post::all()]);
    }

    public function show($id)
    {
        // Find the post with the provided $id or fail ( 404 page )
        return view('post.show', ['post' => Post::findOrFail($id)]);
    }

    public function create()
    {
        return view('post.create', ['tags' => Tags::all()]);
    }

    public function store(Request $request)
    {
        dd($request);
    }

    public function update()
    {

    }


    public function delete()
    {

    }


    // OLD

    public function gigigi($tag)
    {
        // /*
        //     Get the $tag var from the uri, converting it to lowercase just in case the users types FiNaNcE when he searches for "finance" post/news
        // */
        //     $tag = strtolower($tag);
        //     $match = $tag;
        // /*
        //     Since we have a breaking-news route and a 'breaking-news' tag we need to replace the
        //     fetched route name dashes with white space in order to retrieve posts with an tag that has dashes
        // */
        //     $tag = preg_replace('/\-/', ' ', $tag);
        //     $route = ucfirst($tag);
        // /*
        //     Since the route contains a tag name we search for the post/news using the Tags model's defined hasMany relationship.
        //     The request is 404 if the tag does not exist!
        // */
        //     $posts = Tags::where('name', $tag)->firstOrFail()->posts;
        //     return view('post.show', [
        //         'posts' => $posts, 'route' => $route,
        //         'match' => $match]);
    }

    public function single($id)
    {
        $post = Post::where('id', $id)->firstOrFail();
        return view('post.single', [
            'post' => $post,
            'match' => null]);
    }

    public function updatetwo($id)
    {
        $post = Post::where('id', $id)->firstOrFail();
        return view('post.edit', [
            'post' => $post,
            'match' => null]);
    }

    public function save(Request $request)
    {
        $body = $request->input('postBody');
        $title = $request->input('postTitle');
        $post = Post::find($request->id);
        $post->title = $title;
        $post->body = $body;
        if($post->was_modified === 0)
        {
            $post->was_modified = 1;
        }
        $post->save();
        return redirect('/post/' . $request->id);
    }
}
