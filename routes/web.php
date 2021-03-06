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

Route::group(['middleware' => ['web']], function () {
    Route::get('blog/{slug}/comment',['as' => 'blog.single']);
    Route::get('/','PagesController@getIndex');
//about
    Route::get('/contact', 'PagesController@getContact');
//contact
    Route::get('/about','PagesController@getAbout');
    Route::resource('posts','PostController');
});
