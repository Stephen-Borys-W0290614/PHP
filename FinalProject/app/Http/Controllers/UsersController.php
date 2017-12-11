<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

use DB;


use Auth;


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


    public function showUpdate(User $user){

        return view('users.update', compact('user'));


    }


    public function update($id){

     $this->validate(request(), [
         'name' => 'required',
         'email' => 'required'
     ]);

     $data = array(
         'name' => request('name'),
         'email' => request('email')
     );

     User::where('id', $id)->update($data);


     $user = User::where('id', $id)->first();



        $user->last_modified_by = auth()->id();


        $user->update();


        session()->flash('message', 'User Updated!');




        return redirect('/users');


    }



//    public function profile(){
//
//        return view('users.profile', array('user' => Auth::user()));
//
//    }




    public function destroy($user_id){




        $user = User::where('id', $user_id)->first();


        if($user->name == 'Big Boss' || Auth::user()->id == $user->id){


            session()->flash('message', 'User Cannot Be Deleted!');


            return redirect('/users');

        }


        $user->deleted_by = auth()->id();

        $user->update();

        $user->delete();

        session()->flash('message', 'User Deleted!');


        return redirect('/users');


    }
}
