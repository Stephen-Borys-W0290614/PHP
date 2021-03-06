<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Search;

use App\User;

class SearchController extends Controller
{
    public function __construct(User $users)
    {

        $this->middleware('auth');
        //$this->middleware('guest', ['except' => 'index','show']);


    }

    public function search(Request $request)
    {
        $users = User::where('name', 'like', '%' . $request['search'] . '%')
            ->orwhere('email', 'like', '%' . $request['search'] . '%')->get();


        return view('users.searched', compact('users'));
    }
}
