<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/home', 'HomeController@getHome');

Route::get('/contato', 'HomeController@getContato');
Route::post('/contato', ['as' => 'enviaContato', 'uses' => 'HomeController@postContato']);

Route::get('/sobre', 'HomeController@getSobre');

//Route::get('slideshow', 'SlideShowController@index');
//Route::post('slideshow', 'SlideShowController@store');
//Route::get('slideshow/create', 'SlideShowController@create');
//Route::post('slideshow/{id}', 'SlideShowController@update');
//Route::post('slideshow/{id}', 'SlideShowController@destroy');
Route::resource('slideshow', 'SlideShowController');
//Route::post('slideshow', 'SlideShowController@changeOptions');

// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');