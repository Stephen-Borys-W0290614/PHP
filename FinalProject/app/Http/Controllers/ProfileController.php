<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

use Auth;

use Image;

use App\Post;

use Validator;


use Illuminate\Support\Facades\Redirect;

class ProfileController extends Controller
{
    public function index()
    {

//        $posts = User::find(user_id)->posts;

//        return view('users.profile', array('user' => Auth::user()));

        $user = Auth::user();
        $posts = $user->posts()->latest()->get();

        return view('users.profile',array("user" => $user, "posts" => $posts));



    }




    public function store(Request $request)
    {


        $rules = array(
            'avatar' => 'required | mimes:jpeg,jpg,png | max:1000',
        );


        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return Redirect::back()
                ->withErrors($validator)
                ->withInput();
        }


        //This is to handle the user upload for avatar

        if ($request->hasFile('avatar')) {

            $avatar = $request->file('avatar');
            $filename = time() . '.' . $avatar->getClientOriginalExtension();
            Image::make($avatar)->resize(300, 300)->save(public_path('/uploads/avatars/' . $filename));


            $user = Auth::user();
            $user->avatar = $filename;
            $user->save();

        }

        $user = Auth::user();
        $posts = $user->posts()->latest()->get();

        return view('users.profile', array("user" => $user, "posts" => $posts));

    }



    public function update(User $user)
    {


        return view('users.updateProfile', compact('user'));

    }


    public function updateProfile($id)
    {

        $this->validate(request(), [
            'bio' => 'required|max:191',
        ]);

        $data = array(
            'bio' => request('bio'),
        );

        User::where('id', $id)->update($data);

        return redirect('/profile');


    }

}
