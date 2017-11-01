<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {

    $tasks = [
        'Ball out',

        'Kep jacket on because mans not hot',

        'Make sure the ting goes skiiiiiira'
    ];

    $name = 'Terrence';

    return view('welcome', compact('name','tasks')


        );

});
