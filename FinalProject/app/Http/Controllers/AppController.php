<?php
namespace App\Http\Controllers;
use App\User;
use App\Role;
use Illuminate\Http\Request;
class AppController extends Controller
{
    public function getIndex()
    {
        return view('index');
    }

    public function getAuthorPage()
    {
        return view('author');
    }
    public function getAdminPage()
    {
        $users = User::all();
        return view('admin', ['users' => $users]);
    }
    public function getGenerateArticle()
    {
        return response('Article generated!', 200);
    }

    public function postAdminAssignRoles(Request $request)
    {
        $user = User::where('email', $request['email'])->first();
        $user->roles()->detach();
        if ($request['role_mod']) {
            $user->roles()->attach(Role::where('title', 'mod')->first());
        }
        if ($request['role_theme']) {
            $user->roles()->attach(Role::where('title', 'theme manager')->first());
        }
        if ($request['role_admin']) {
            $user->roles()->attach(Role::where('title', 'admin')->first());
        }

        return redirect('/users');
//        return redirect()->back();
    }
}