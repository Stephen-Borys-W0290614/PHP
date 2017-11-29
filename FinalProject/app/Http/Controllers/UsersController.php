<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;


class UsersController extends Controller
{

    public function __construct(User $users)
    {

        $this->middleware('auth');
        //$this->middleware('guest', ['except' => 'index','show']);


    }



    public function index(Request $request){

        //$posts = $posts->all();

        //return session('message');

//        $search = $request->input('search');
//
//
//        $users = User::latest()
//            ->search($search)
//            ->get();




        //$posts = Post::latest()->get();
        //COULD ALSO DO $posts = Post::orderBy('created_at', 'desc')->get();


//        return view('users.indexMain', compact('users', 'search'));


        $users = User::latest()->get();

        return view('users.indexMain' , compact('users'));

    }

    public function show(User $user){

        return view('users.showMain', compact('user'));


    }


    public function store(){

        return redirect('/users');


    }


    public function search(Request $request){

        $user = User::where('name', 'like', '%' . $request['search'] . '%')
            ->orwhere('email', 'like', '%' . $request['search'] . '%');

        $theSearch = true;

        return view('users.searched', compact('user', 'theSearch'));

    }
}