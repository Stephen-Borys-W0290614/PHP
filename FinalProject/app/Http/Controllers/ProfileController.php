<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

use Auth;

use Image;

class ProfileController extends Controller
{
    public function index()
    {

        return view('users.profile', array('user' => Auth::user()));

    }


    public function store(Request $request)
    {

        //This is to handle the user upload for avatar

        if ($request->hasFile('avatar')) {

            $avatar = $request->file('avatar');
            $filename = time() . '.' . $avatar->getClientOriginalExtension();
            Image::make($avatar)->resize(300, 300)->save(public_path('/uploads/avatars/' . $filename));


            $user = Auth::user();
            $user->avatar = $filename;
            $user->save();

        }


        return view('users.profile', array('user' => Auth::user()));


    }


    public function update(User $user)
    {


        return view('users.updateProfile', compact('user'));

    }


    public function updateProfile($id)
    {

        $this->validate(request(), [
            'bio' => 'required',
        ]);

        $data = array(
            'bio' => request('bio'),
        );

        User::where('id', $id)->update($data);

        return redirect('/profile');


    }

}
