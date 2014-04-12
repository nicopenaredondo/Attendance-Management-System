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

/*
|--------------------------------------------------------------------------
| Note!!!
|--------------------------------------------------------------------------
| the routes is in the app/routes directory. i divided the routes into different
| file so it can be clean as the system goes larger
|
*/


Route::get('/',array('before' => 'install', function()
{
	return View::make('hello');
}));

foreach (glob(dirname(__FILE__)."/routes/*.php") as $filename)
{
    include_once $filename;
}
