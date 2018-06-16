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

/*
Route::get('/', function () {
    return view('welcome');
});
*/
use App\Article1;

Route::get('/', 'PagesController@index');

Route::get('/hello', function () {
    return "Hello Arvind";
});

Route::get('/about', function () {
    return view('pages.about');
});

Route::get('/contact', function () {
    return view("pages.contact");
});

Route::get('/users/{id}', function ($id) {
    return "this is user ".$id;
});

Route::resource("posts", "PostsController");
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

