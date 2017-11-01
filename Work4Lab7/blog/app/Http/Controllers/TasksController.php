<?php

namespace App\Http\Controllers;

use App\Task;

class TasksController extends Controller
{
    public function index(){

        $name = 'Terrence';

        $tasks = Task::all();

        return view('tasks.index', compact('name','tasks'));
    }

    public function show($id){
        //$task = DB::table('tasks')->find($id);

        $task = Task::find($id);


        return view('tasks.show', compact('task'));
    }
}
