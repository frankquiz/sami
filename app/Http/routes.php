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
 Route::get('/pantallas/prueba', 'WelcomeController@prueba');
 Route::get('/pantallas/formseric', 'WelcomeController@formseric');
 Route::get('/pantallas/formradiofonica', 'WelcomeController@formradiofonica');
 Route::get('/pantallas/formpreciudadano', 'WelcomeController@formpreciudadano');
 Route::get('/pantallas/formreferencia', 'WelcomeController@formreferencia');
 Route::get('/pantallas/formllamadatelefonica', 'WelcomeController@formllamadatelefonica');
 Route::get('/pantallas/cargadeinventario', 'WelcomeController@cargadeinventario');
 Route::get('/pantallas/descargadeinventario', 'WelcomeController@descargadeinventario');
 Route::post('/pantallas/formseric', 'WelcomeController@formsericpost');
 Route::post('/pantallas/formradiofonica', 'WelcomeController@formradiofonicapost');
 Route::post('/pantallas/formpreciudadano', 'WelcomeController@formpreciudadanopost');
 Route::post('/pantallas/formreferencia', 'WelcomeController@formreferenciapost');
 Route::post('/pantallas/formllamadatelefonica', 'WelcomeController@formllamadatelefonicapost');


 Route::get('listaserviciopendiente', 'WelcomeController@listaserviciopendiente');
Route::get('listaserviciopendienteporfinalizar', 'WelcomeController@listaserviciopendienteporfinalizar');
Route::get('/', 'WelcomeController@paginicio');


Route::get('home', 'HomeController@index');
Route::get('welcome', 'HomeController@welcome');
Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',

]);

