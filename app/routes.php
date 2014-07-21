<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', 'HomeController@showHomepage');

Route::get('/login', 'HomeController@showLogin');
Route::post('/login', 'HomeController@doLogin');
Route::get('/logout', 'HomeController@logout');

Route::get('/profile', 'HomeController@showProfile');

Route::get('/post', 'HomeController@showPost');

Route::resource('profiles', 'UsersController');

Route::get('/about', 'HomeController@showAbout');

Route::resource('gallery', 'ImageController');

Route::resource('admin', 'AdminController');

Route::get('upload', function(){
    return View::make('photo_edit');
});




