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
 Route::get('/', 'WelcomeController@index');
 Route::get('contacto', 'WelcomeController@contacto');
 Route::get('pagina', 'WelcomeController@pagina');
 Route::get('pagina1', 'WelcomeController@pagina1');
 Route::get('pagina2', 'WelcomeController@pagina2');

Route::get('home', 'HomeController@index');
Route::get('welcome', 'HomeController@welcome');
Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',

]);

