<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Mail;

use App\User;

use App\Mail\Welcome;

use App\Http\Requests\RegistrationRequest;

class RegistrationController extends Controller
{

    public function create(){

        return view('registration.create');

    }


    public function store(RegistrationRequest $form){


        $form->persist();



//       $user = User::create(request(['name', 'email', bcrypt('password')]));

        session()->flash('message', 'Thanks So Much For Signing Up!');

        //Redirect to the home page.

        return redirect()->home();


    }


}
