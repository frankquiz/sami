<?php namespace App\Http\Controllers;

class WelcomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Welcome Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders the "marketing page" for the application and
	| is configured to only allow guests. Like most of the other sample
	| controllers, you are free to modify or remove it as you desire.
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('guest');
	}

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('welcome');
	}

public function inicio()
	{
		return view('/pantallas/prueba');
	}

	public function formseric()
	{
		return view('/pantallas/formseric');
	}

	public function formradiofonica()
	{
		return view('/pantallas/formradiofonica');
	}

	public function formpreciudadano()
	{
		return view('/pantallas/formpreciudadano');
	}

	public function formreferencia()
	{
		return view('/pantallas/formreferencia');
	}

	public function formllamadatelefonica()
	{
		return view('/pantallas/formllamadatelefonica');
	}

	public function cargadeinventario()
	{
		return view('/pantallas/cargadeinventario');
	}

	public function descargadeinventario()
	{
		return view('/pantallas/descargadeinventario');
	}

	
	public function listaserviciopendiente()
	{
		return view('listaserviciopendiente');
	}

	public function listaserviciopendienteporfinalizar()
	{
		return view('listaserviciopendienteporfinalizar');
	}




	public function paginicio()
	{
		return view('welcome');
	}
	
}