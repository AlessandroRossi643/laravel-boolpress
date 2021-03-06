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
Route::get('/', 'HomeController@index')->name('home');
Route::get('/posts/{slug}','PostController@show')->name('posts.show');
Route::get('categories/{slug}','PostController@postInCategory')->name('posts.category');

Auth::routes();

Route::middleware('auth')
  ->prefix('admin')
  ->namespace('admin')
  ->name('admin.')
  ->group(function(){
    Route::get('/','HomeController@index')->name('home');
    Route::resource('/posts','PostController');
    Route::resource('/categories','CategoryController');
});
