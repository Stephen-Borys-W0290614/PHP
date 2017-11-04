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

    public function show(Task $task){  //Task Find Wildcard
        //$task = DB::table('tasks')->find($id);

       // $task = Task::find($id);
        //quit
        //return $task;

        return view('tasks.show', compact('task'));


    }


}
