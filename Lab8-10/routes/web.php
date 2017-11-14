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

//--------------------------------------------

//This is for part 3 of the rubric I believe.
    //dd(resolve('App\Billing\stripe'));
//--------------------------------------------

Route::get('/', 'PostController@index')->name('home');


Route::get('/home', 'PostController@index');


Route::get('posts', 'PostController@index');



Route::get('/posts/create', 'PostController@create');



Route::post('/posts', 'PostController@store');



Route::get('/posts/{post}', 'PostController@show');



Route::post('/posts/{post}/comments', 'CommentsController@store');



Route::get('/register', 'RegistrationController@create');



Route::post('/register', 'RegistrationController@store');



Route::get('/login', 'SessionsController@create')->name('login');



Route::post('/login', 'SessionsController@store');



Route::get('/logout', 'SessionsController@destroy');



//GET /posts

//GET /posts/create

//POST /posts

//Get /posts/{id}/edit

//GET /posts/{id}

//PATCH /posts/{id}

//DELETE /posts/{id}




//controller => PostConrtoller


// Eloquent model =>Post


//migration => create_posts_table