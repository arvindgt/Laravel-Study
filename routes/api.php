<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
 
Route::get('articles', 'Article1Controller@index');
Route::get('articles/{article}', 'Article1Controller@show');
Route::post('articles', 'Article1Controller@store');
Route::put('articles/{article}', 'Article1Controller@update');
Route::delete('articles/{article}', 'Article1Controller@delete');