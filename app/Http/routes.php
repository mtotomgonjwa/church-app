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

Route::get('/', function () {
    return view('dashboard');
});


Route::get('/events','EventController@showEvents');
Route::get('/preachings','PreachingController@showPreachings');

//API
Route::get('/api/v1/{table}','BaseController@retrieveList');

Route::get('/php', function () {
    return phpinfo();
});