<?php


namespace App\Http\Controllers;
use App\User;
use Illuminate\Foundation\Auth\User as Authenticatable;

class AdminController extends Controller
{
    public function adminPage()
    {
        return view('admin.admin');

    }
    public function store()
    {
        //Attempt to authenticate whether user is admin
        // if(Auth()::user()->isAdministrator()){
        //   return view('admin.admin');
        //}
        //else{
        //return redirect()->home();
        // }
        return view('admin.admin');

    }
}