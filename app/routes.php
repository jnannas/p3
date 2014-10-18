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

#Homepage
Route::get('/', function()
{
	return View::make('index');
});

Route::get('/lorem-ipsum', function()
{
	$paragraph = 0;
	return View::make('lorem-ipsum')->with('paragraph', $paragraph);
});

Route::post('/lorem-ipsum', function()
{
	$paragraph = Input::get("paragraphs");
	return View::make('lorem-ipsum')->with('paragraph', $paragraph);
});
