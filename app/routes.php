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

Route::get('/new_post','PostController@showNewPost');

Route::post('/add_post','PostController@doPost');

Route::post('/add_exam','PostController@doExam');

Route::get('/CSC211','UserController@showCSC211');

Route::get('/CSC241','UserController@showCSC241');

Route::get('/MTH121','UserController@showMTH121');

Route::get('/MTH243','UserController@showMTH243');

Route::get('/1834Soft','UserController@show1834');

Route::get('/tests','UserController@showTests');

Route::get('/testing', function()
{
	return View::make('testing');
});


Route::get('/adding_user_table', function()
{
	return View::make('database.making_user_table');
});

Route::get('/adding_user_columns', function()
{
	return View::make('database.adding_user_columns');
});

Route::get('/adding_post_table', function()
{
	return View::make('database.making_post_table');
});

Route::get('/adding_post_columns', function()
{
	return View::make('database.adding_post_columns');
});

Route::get('/adding_exam_table', function()
{
	return View::make('database.making_exams_table');
});

Route::get('/adding_exam_columns', function()
{
	return View::make('database.adding_exam_columns');
});



?>