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

// use Illuminate\Routing\Route;



// Posts

Route::get('/', function(){
    $posts = App\Posts::latest()->get();

    return view('aaablog.home',[
        'posts' => $posts
    ]);
});

Route::get('/posts','PostsController@index');
Route::post('/posts','PostsController@store');
Route::get('/dashboard/create','PostsController@create');
Route::get('/posts/{post}','PostsController@show');
Route::get('/posts/{post}/edit','PostsController@edit');
Route::put('/posts/{post}','PostsController@update');
Route::get('/posts/{post}/delete','PostsController@destroy');

// Contact
Route::post('/contact','ContactController@store');
Route::get('/contact','ContactController@create');
Route::get('/dashboard/msg','ContactController@show');
Route::get('/dashboard/msg/{msg}/delete','ContactController@destroy');
Route::get('/dashboard/msg/{msg}/full-msg','ContactController@fullMsg');

// Dashboard
Route::get('/dashboard','DashboardController@index');
Route::get('/dashboard/posts','DashboardController@show');


// Login
Auth::routes();

Route::get('/logout', 'DashboardController@logout');