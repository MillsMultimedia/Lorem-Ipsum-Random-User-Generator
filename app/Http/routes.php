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
    return view('layouts/home');
});

Route::get('/lorem', 'LoremController@getLorem');

Route::post('/lorem', 'LoremController@postLorem');

Route::get('/user', function () {
    return view('layouts/user');
});

Route::post('/user', function () {
    return view('layouts/user');
});

