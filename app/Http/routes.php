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
 Route::get('/pantallas/login', 'WelcomeController@login');
 Route::get('/pantallas/prueba', 'WelcomeController@prueba');
 Route::get('/pantallas/formseric', 'WelcomeController@formseric');
 Route::get('/pantallas/formradiofonica', 'WelcomeController@formradiofonica');
 Route::get('/pantallas/formpreciudadano', 'WelcomeController@formpreciudadano');
 Route::get('/pantallas/formreferencia', 'WelcomeController@formreferencia');
 Route::get('/pantallas/formllamadatelefonica', 'WelcomeController@formllamadatelefonica');
 Route::get('/pantallas/cargadeinventario', 'WelcomeController@cargadeinventario');
 Route::get('/pantallas/descargadeinventario', 'WelcomeController@descargadeinventario');
 
 Route::get('/pantallas/recursoparamedico', 'WelcomeController@recursoparamedico');
 Route::get('/pantallas/listaparamedico', 'WelcomeController@listaparamedico');
 Route::get('/pantallas/formparamedico', 'WelcomeController@formparamedico');
 
 Route::get('/pantallas/recursoconductor', 'WelcomeController@recursoconductor');
 Route::get('/pantallas/listaconductor', 'WelcomeController@listaconductor');
 Route::get('/pantallas/formconductor', 'WelcomeController@formconductor');

 Route::get('/pantallas/recursounidad', 'WelcomeController@recursounidad');
 Route::get('/pantallas/listaunidad', 'WelcomeController@listaunidad');
 Route::get('/pantallas/formunidad', 'WelcomeController@formunidad');
 
 Route::post('/pantallas/formseric', 'WelcomeController@formsericpost');
 Route::post('/pantallas/formradiofonica', 'WelcomeController@formradiofonicapost');
 Route::post('/pantallas/formpreciudadano', 'WelcomeController@formpreciudadanopost');
 Route::post('/pantallas/formreferencia', 'WelcomeController@formreferenciapost');
 Route::post('/pantallas/formllamadatelefonica', 'WelcomeController@formllamadatelefonicapost');

 Route::post('/pantallas/formparamedico', 'WelcomeController@formparamedicopost');
 Route::post('/pantallas/formconductor', 'WelcomeController@formconductorpost');
 Route::post('/pantallas/formunidad', 'WelcomeController@formunidadpost');
 
 Route::get('/pantallas/listaserviciopendiente', 'WelcomeController@listaserviciopendiente');
 Route::get('/pantallas/asignacion_servicio_pendiente/{id}', 'WelcomeController@asignacion_servicio_pendiente');
 Route::post('/pantallas/post_asignacion_servicio_pendiente/', 'WelcomeController@post_asignacion_servicio_pendiente');

 Route::get('/pantallas/listaserviciopendienteporfinalizar', 'WelcomeController@listaserviciopendienteporfinalizar');

 Route::get('/pantallas/formgestionproductos', 'WelcomeController@formgestionproductos');
 Route::get('/pantallas/formproductos', 'WelcomeController@formproductos');
 Route::get('/pantallas/listaproductos', 'WelcomeController@listaproductos');
 Route::post('/pantallas/formproductos', 'WelcomeController@formproductospost');

 Route::get('/pantallas/gestionusuarios', 'WelcomeController@gestionusuarios');
 Route::get('/pantallas/formcrearusuarios', 'WelcomeController@formcrearusuarios');
 Route::get('/pantallas/listausuarios', 'WelcomeController@listausuarios');
 Route::post('/pantallas/formcrearusuarios', 'WelcomeController@formcrearusuariospost');


 Route::get('/', 'WelcomeController@paginicio');


Route::get('home', 'HomeController@index');
Route::get('welcome', 'HomeController@welcome');
Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',

]);

