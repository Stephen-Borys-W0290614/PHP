<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Mail;

use App\User;

use App\Role;

use App\Mail\Welcome;

use App\Http\Requests\RegistrationRequest;

class RegistrationController extends Controller
{

    public function create(){

        return view('registration.create');

    }


    public function store(){


//        $form->persist();

        $user = User::create([

            'name' => request('name'),

            'email' => request('email'),

           'password' => bcrypt(request('password'))
     ]);
//        $user
//            ->roles()
//            ->attach(Role::where('title', 'mod')->first());





       auth()->login($user);

//       $user = User::create(request(['name', 'email', bcrypt('password')]));

        session()->flash('message', 'Thanks So Much For Signing Up!');

        //Redirect to the home page.

        return redirect()->home();


    }


}
