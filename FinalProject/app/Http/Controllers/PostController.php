<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;

use DB;

use App\Repositories;

use Image;

use Illuminate\Database\Query\Builder;

use Carbon\Carbon;

class PostController extends Controller
{

    public function __construct(Post $posts)
    {

        $this->middleware('auth')->except(['index', 'show']);
        //$this->middleware('guest', ['except' => 'index','show']);

        //This is to make sure the user is logged in


    }


    public function index(Post $posts){

        //$posts = $posts->all();

        //return session('message');

       $posts = Post::latest()
          ->filter(request(['month', 'year']))
          ->get();


        //$posts = Post::latest()->get();
        //COULD ALSO DO $posts = Post::orderBy('created_at', 'desc')->get();


        return view('posts.indexMain', compact('posts'));

        //This is to show posts from the most new to most old

    }


    public function show(Post $post){

        //$post = Post::find($id);

        return view('posts.showMain', compact('post'));

    }

    public function create(){

        return view('posts.create');

        //This will like you to the page to create posts

    }

    public function store(Request $request){

        //dd(request()->all());

        //Create A new post using the request data,

        //$post = new Post;


        //$post->title = request('title');


        //$post->body = request('body');

        //Save it to the database,

        //$post->save();

        $this->validate(request(), [
           'title' => 'required|max:25',

           'body' => 'required',

            'urlimage'=>'required '
        ]);


        $post = new Post();

        $post->title = $request->title;
        $post->body = $request->body;
        $post->user_id = auth()->id();
        $img = $request->urlimage;
        $imgName = basename($img);
        $Location = public_path('images/'.$imgName);
        Image::make($img)->resize('356','280')->save($Location);

        //This will take the url, change its name for storing,
        //Then add the new name to the database and resize the image

        $post->image = $imgName;

        $post->save();
        //save it to database

        //returns to the main page

        session()->flash('message', 'Your Post Has Now Been Published');



        // And then redirect to the post page

        return redirect('/posts');

        //This is what is used to save pictures

    }


    public function destroy($post_id){

        $post = Post::where('id', $post_id)->first();

        $post->deleted_by = auth()->id();

        $post->update();

        $post->delete();


        session()->flash('message', 'Post Deleted!');



        return redirect()->route('home');


        //This will soft delete a post, and update the database with who deleted them
    }


    public function pollPosts()
    {
        $count = Post::get()->count();

        return response()->json(['count' => $count]);

        //This is what is used for polling
    }



}
