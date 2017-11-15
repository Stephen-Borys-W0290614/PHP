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

        //Validate the form.

        $form->persist();

        //Create and save user.


//       $user = User::create(request(['name', 'email', bcrypt('password')]));




        //Redirect to the home page.

        return redirect()->home();


    }


}
