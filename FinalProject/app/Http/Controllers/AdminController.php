<?php


namespace App\Http\Controllers;
//use App\User;
//use App\Role;
//use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\User;
use App\Role;
use Illuminate\Support\Facades\Auth;
use Log;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class AdminController extends Controller

{
//    public function __construct()
//    {
//
//        $this->middleware('role:admin');
//
//    }


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