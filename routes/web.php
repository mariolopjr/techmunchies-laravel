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
    return view('index');
});

Route::get('/blog', function () {
    return view('blog');
});

// Posts
Route::group(['prefix' => 'posts', 'as' => 'posts.'], function () {
    Route::get('/', 'PostController@index')
        ->name('index');
    Route::get('/{post}', 'PostController@show')
        ->name('show');
    Route::post('/', 'PostController@store')
        ->name('store');
});
