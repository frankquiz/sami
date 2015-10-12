<?php namespace App\Http\Controllers;

use Input;
use App\Servicios;
use App\Persona;
use App\Unidades;


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

public function prueba()
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
		$Servicio = Servicios::all();
		return view('/pantallas/listaserviciopendiente',compact('Servicio'));
	}

	public function listaserviciopendienteporfinalizar()
	{
		return view('/pantallas/listaserviciopendienteporfinalizar');
	}

	public function paginicio()
	{
		return view('welcome');
	}

	public function recursoparamedico()
	{
		return view('/pantallas/recursoparamedico');
	}

	public function listaparamedico()
	{
		$listapersona = Persona::all();
		//$listapersona = Persona::where('habilitado_persona',1)->get();
		//dd($listapersona);
		return view('/pantallas/listaparamedico',compact('listapersona'));
	}

	public function formparamedico()
	{
		return view('/pantallas/formparamedico');
	}


	public function recursoconductor()
	{
		return view('/pantallas/recursoconductor');
	}

	public function listaconductor()
	{
		$listapersona = Persona::all();
		return view('/pantallas/listaconductor',compact('listapersona'));
	}

	public function asignacion_servicio_pendiente($id)
	{
		return view('/pantallas/asignacion_servicio_pendiente');
	}

	public function formconductor()
	{
		return view('/pantallas/formconductor');
	}


	public function recursounidad()
	{
		return view('/pantallas/recursounidad');
	}

	public function listaunidad()
	{
		$listaunid = Unidades::all();
		return view('/pantallas/listaunidad',compact('listaunid'));
	}

	public function formunidad()
	{
		return view('/pantallas/formunidad');
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

public function formpreciudadanopost()
	{

	    $servicio = new Servicios();
	    $servicio->nombre_solicitante = Input::get("inombre_solicitante");
	    $servicio->cedula_solicitante = Input::get("ici_solicitante");
        $servicio->telefono_solicitante = Input::get("itelf_solicitante");
        $servicio->nombre_paciente = Input::get("inombre_paciente");
        $servicio->edad_paciente = Input::get("iedad_paciente");
        $servicio->idx_paciente = Input::get("iidx_paciente");
        $servicio->direccion_emergencia = Input::get("idireccion_emergencia");
        $servicio->facha_del_servicio = Input::get("ifecha_servicio");

		$servicio->save();

		dd($servicio);

		//return redirect('/');
	}

public function formreferenciapost()
	{

	    $servicio = new Servicios();
	    $servicio->centro_asistencial_refiere = Input::get("icentro_asistencial_refiere");
	    $servicio->centro_asistencial_referido = Input::get("icentro_asistencial_referido");
        $servicio->hora_solicitud_servicio = Input::get("ihora_solicitud");        
        $servicio->medico_refiere = Input::get("imedico_refiere");
        $servicio->sas_medico = Input::get("isas_medico");
        $servicio->nombre_paciente = Input::get("inombre_paciente");        
        $servicio->edad_paciente = Input::get("iedad_paciente");        
        $servicio->idx_paciente = Input::get("iidx_paciente");
        $servicio->ci_paciente = Input::get("ici_paciente");
        $servicio->nombre_representante = Input::get("inombre_representante");
        $servicio->ci_representante= Input::get("ici_representante");
		$servicio->save();

		dd($servicio);

		//return redirect('/');
	}

public function formllamadatelefonicapost()
	{

	    $servicio = new Servicios();
	    $servicio->nombre_solicitante = Input::get("inombre_solicitante");
	    $servicio->cedula_solicitante = Input::get("ici_solicitante");
        $servicio->telefono_solicitante = Input::get("itelf_socilitante");        
        $servicio->direccion_emergencia = Input::get("idireccion_emergencia");
        $servicio->nombre_paciente = Input::get("inombre_paciente");        
        $servicio->edad_paciente = Input::get("iedad_paciente");        
        $servicio->idx_paciente = Input::get("iidx_paciente");
        $servicio->save();
       
		dd($servicio);

		//return redirect('/');
	}

public function formparamedicopost()
	{

	    $personas = new Persona();
	    $personas->nombre_persona = Input::get("inombre_persona");
	    $personas->apellido_persona = Input::get("iapellido_persona"); 
	    $personas->ci_persona = Input::get("ici_persona");
        $personas->telefono_persona = Input::get("itelefono_persona");        
        $personas->direccion_persona = Input::get("idireccion_persona");
        //$persona->paramedico_persona = 1;
        $personas->save();

		dd($personas);

		//return redirect('/');
	}

public function formconductorpost()
	{

	    $personas = new Persona();
	    $personas->nombre_persona = Input::get("inombre_persona");
	    $personas->apellido_persona = Input::get("iapellido_persona"); 
	    $personas->ci_persona = Input::get("ici_persona");
        $personas->telefono_persona = Input::get("itelefono_persona");        
        $personas->direccion_persona = Input::get("idireccion_persona");
        //$persona->conductor_persona = 1;
        $personas->save();
       
		dd($personas);

		//return redirect('/');
	}

	public function formunidadpost()
	{

	    $unidades = new Unidades();
	    $unidades->placa_unidad = Input::get("iplaca_unidad");
	    $unidades->numero_unidad = Input::get("inumero_unidad"); 
	    $unidades->modelo_unidad = Input::get("imodelo_unidad");
        $unidades->save();
       
		dd($unidades);

		//return redirect('/');
	}
	
}