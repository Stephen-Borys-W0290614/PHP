<?php

namespace App\Http\Controllers;

use App\Post;


use App\Comment;


class CommentsController extends Controller
{

//    public function store(){
//
//
////        $this->validate(request(), ['body' => 'required|min:4|max:255']);
////
////        $post->addComment(request('body'));
//
//
//        $this->validate(request(), [
//
//            'body' => 'required'
//        ]);
//
//
//        auth()->user()->publish(
//
//            new Comment(request(['body']))
//
//        );
//
//
//
//
//        //Comment::create([
////
//  //          'body' => request('body'),
////
//  //          'post_id' => $post->id
////
//  //      ]);
//
//        return back();
//
//    }

    public function store(Post $post)
    {
        $this->validate(request(), [
            'body' => 'required|min:2'
        ]);
        $post->addComment(request('body'));
        return back(); // Nice helper function to return to prev. page.
    }



}

