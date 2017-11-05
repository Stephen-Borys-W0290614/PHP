<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;

class PostController extends Controller
{
    public function index(){

        $posts = Post::latest()->get();
        //COULD ALSO DO $posts = Post::orderBy('created_at', 'desc')->get();


        return view('posts.indexMain', compact('posts'));

    }


    public function show(Post $post){

        //$post = Post::find($id);

        return view('posts.showMain', compact('post'));

    }

    public function create(){

        return view('posts.create');

    }

    public function store(){

        //dd(request()->all());

        //Create A new post using the request data,

        //$post = new Post;


        //$post->title = request('title');


        //$post->body = request('body');

        //Save it to the database,

        //$post->save();

        $this->validate(request(), [
           'title' => 'required|max:25',

           'body' => 'required'
        ]);

        Post::create(request(['title' , 'body']));

        // And then redirect to the home page

        return redirect('/');

    }



}
