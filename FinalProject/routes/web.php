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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'PostsController@index')->name('home');


Route::get('/', 'PostsController@index')->name('home');


//Route::get('/users', 'UsersController@index')->middleware('auth');

Route::get('/users', [
    'uses' => 'UsersController@index',
    'as' => 'admin',
    'middleware' => 'roles',
    'roles' => ['admin']
]);



//Route::post('/users', 'UsersController@store')->middleware('auth');


Route::post('/users', [
    'uses' => 'UsersController@store',
    'as' => 'admin',
    'middleware' => 'roles',
    'roles' => ['admin']
]);


//Route::post('/users/searched', 'SearchController@search');


Route::post('/users/searched', [
    'uses' => 'SearchController@search',
    'middleware' => 'roles',
    'roles' => ['admin']
]);



Route::get('/users/delete/{user_id}', [
    'uses' => 'UsersController@destroy' ,
    'as' => 'users.delete' ,
    'roles' => 'admin'
]);



Route::get('/users/edit/{user}', 'UsersController@show');


Route::post('/users/update', 'AdminController@postAdminAssignRoles');


Route::get('/admin', [
    'uses' => 'AppController@getAdminPage',
    'as' => 'admin',
    'middleware' => 'roles',
    'roles' => ['admin']
]);

Route::post('/admin', [
    'uses' => 'AppController@postAdminAssignRoles',
    'middleware' => 'roles',
    'roles' => ['admin']
]);




Route::get('/themes', 'ThemesController@index');



//Route::get('/admin','AdminController@adminPage');






Route::get('/home', 'PostController@index');


Route::get('posts', 'PostController@index');



Route::get('/posts/create', 'PostController@create');



Route::post('/posts', 'PostController@store');



Route::get('/posts/{post}', 'PostController@show');


//Route::get('/posts/tags/{tag}', 'TagsController@index');


Route::post('/posts/{post}/comments', 'CommentsController@store');



Route::get('/posts/delete/{post_id}', [
    'uses' => 'PostController@destroy' ,
    'as' => 'posts.delete' ,
    'roles' => 'mod'
]);



Route::get('/register', 'RegistrationController@create');



Route::post('/register', 'RegistrationController@store');



Route::get('/login', 'SessionsController@create')->name('login');



Route::post('/login', 'SessionsController@store');



Route::get('/logout', 'SessionsController@destroy');



Route::get('password/reset/{token?}', 'Auth\ResetPasswordController@showResetForm');


Route::post('password/email', 'Auth\ResetPasswordController@sendResetLinkEmail');


Route::post('password/reset', 'Auth\ResetPasswordController@reset');
