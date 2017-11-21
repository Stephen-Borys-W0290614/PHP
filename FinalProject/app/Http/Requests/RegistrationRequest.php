<?php

namespace App\Http\Requests;

use App\User;

use App\Mail\WelcomeAgain;

use Illuminate\Support\Facades\Mail;

use Illuminate\Foundation\Http\FormRequest;

class RegistrationRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {


        return [
            'name' => 'required|max:55',

            'email' => 'required|email|max:255',

            'password' => 'required|confirmed|max:255'


        ];
    }


    public function persist(){

        $user = User::create([

            'name' => request('name'),

            'email' => request('email'),

            'password' => bcrypt(request('password'))

        ]);



        //Sign them in.

        auth()->login($user);


        //\Mail::to($user)->send(new WelcomeAgain($user));
    }
}
