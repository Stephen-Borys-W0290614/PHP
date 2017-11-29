<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Theme;

class ThemesController extends Controller
{

    public function __construct(User $users)
    {

        $this->middleware('auth');
        //$this->middleware('guest', ['except' => 'index','show']);


    }

    public function index(){


        $themes = Theme::latest()->get();

        return view('themes.indexMain' , compact('themes'));

    }
}
