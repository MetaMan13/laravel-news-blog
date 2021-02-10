<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Tags;
use Illuminate\Routing\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{

    // RESTfull conventions

    // index -> get request -> all articles DONE

    // show -> get request -> find by post id DONE

    // store -> post reuqest -> create article using request data -> redirect DONE

    // update -> put request -> find post by id -> update data -> redirect

    // delete -> delete request -> find post id -> delete post -> redirect
    
    public function index()
    {
        // Display all posts
        return view('post.index', ['posts' => Post::orderBy('created_at', 'DESC')->get()]);
    }

    public function show($tag)
    {
        // $route = \Route::current();
        // dd($route);
        /*
            Get the $tag var from the uri, converting it to lowercase just in case the users types FiNaNcE when he searches for "finance" post/news
        */
        $tag = strtolower($tag);
        $match = $tag;
        /*
            Since we have a breaking-news route and a 'breaking-news' tag we need to replace the
            fetched route name dashes with white space in order to retrieve posts with an tag that has dashes
        */
            $tag = preg_replace('/\-/', ' ', $tag);
            $route = ucfirst($tag);
        /*
            Since the route contains a tag name we search for the post/news using the Tags model's defined hasMany relationship.
            The request is 404 if the tag does not exist!
        */
            $posts = Tags::where('name', $tag)->firstOrFail()->posts;
            return view('post.show', [
                'posts' => $posts, 
                'route' => $route
            ]);
    }
    
    public function single($id)
    {
        // Find the post with the provided $id or fail ( 404 page )
        return view('post.single', ['post' => Post::findOrFail($id)]);
    }

    public function create()
    {
        return view('post.create', ['tags' => Tags::all()]);
    }

    public function store(Request $request)
    {
        /*
            First we want to validate the request data.
            The validate method will automaticly redirect
            back if the required fields are empty.
            In case the user disables front-end validation.
        */

        $this->validate($request, [
            'postTitle' => 'required',
            'postBody' => 'required'
        ]);

        /*
            After we have validated the request we need to make sure that a post( In our database ) with the same title does not already exist.
            If so we redirect the user to the previous ( create post form page) page.
        */

        if(Post::where('title', $request->postTitle)->exists())
        {
            return back()->with('postTitleError', 'A post with the same title already exists');
        }
        else
        {

            /*
                If we pass the validation and if we make sure that the post does not exist,
                we can then create the post and redirect the user back with the flash message "Post created"
            */

            $post = Post::create([
                'user_id' => $request->user()->id,
                'title' => $request->postTitle,
                'body' => $request->postBody
            ]);            

            // After we have created the article we want to insert the selected tags into the posts_tags pivot table
            
            foreach($request->tags as $tag)
            {
                DB::insert('insert into posts_tags (post_id, tag_id) values(?, ?);', [$post->id, $tag]);
            }

            // We redirrect the user back with a success message

            return back()->with('postCreatedSuccess', 'Post created successfully!');
        }
    }

    public function update(Request $request)
    {
        /*
            First we want to check if the post id belongs to the authenticated user.
            If the id does not match we redirect the user to a 403 forbidden page
        */
        if(Post::findOrFail($request->postId)->user_id != auth()->user()->id)
        {
            return abort('403');
        }else{
            return view('post.update', [
                'post' => Post::findOrFail($request->postId),
                'tags' => Tags::all()
            ]);
        }
    }


    public function delete()
    {

    }
}
