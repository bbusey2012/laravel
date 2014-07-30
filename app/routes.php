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

Route::get('/', function()
{
	return View::make('hello');
});

Route::get('/about', function()
{
	return View::make('about');
});

Route::get('/home','UserController@showHomePage');

Route::get('/login','UserController@showLoginPage');

Route::get('/logout','UserController@doLogout');

Route::get('/dashboard','UserController@loginSuccess');

Route::get('/create','UserController@showCreateAccount');

Route::post('/registration','UserController@doRegistration');

Route::post('/authentication','UserController@doLogin');

Route::get('/adding_column', function()
{
	return View::make('database.adding_column_database');
});

Route::get('/adding_table', function()
{
	return View::make('database.making_database_table');
});
?>