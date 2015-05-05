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

//Route::get('/', 'PostController@index');




Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);


get('/',
    [
        'as'=>'posts', //alias
        'uses'=>'PostController@index' //на post контроллер и экшен index
    ]);

get('unpublished', ['as'=>'posts.unpublished', 'uses'=>'PostController@unpub']);