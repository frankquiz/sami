<?php namespace App\Http\Controllers;

use Input;
use App\Servicios;

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

	public function formsericpost()
	{

		$servicio = new Servicios();
		$servicio->hora_solicitud_servicio = Input::get("ihora_solicitud");
		$servicio->hora_de_servicio = Input::get("ihora_servicio");
		$servicio->nombre_operador_seric = Input::get("inombre_operador_seric");
		$servicio->ci_operador_seric = Input::get("ici_operador_seric");
		$servicio->save();

		dd($servicio);

		//return redirect('/');
	}

	public function formradiofonicapost()
	{

	    $servicio = new Servicios();
	    $servicio->nombre_solicitante = Input::get("inombre_solicitante");
	    $servicio->hora_solicitud_servicio = Input::get("ihora_solicitud");
        $servicio->idx_paciente = Input::get("iidx_paciente");
        $servicio->edad_paciente = Input::get("iedad");
        $servicio->direccion_emergencia = Input::get("idireccion_emergencia");

		$servicio->save();

		dd($servicio);

		//return redirect('/');
	}





	public function paginicio()
	{
		return view('welcome');
	}
	
}