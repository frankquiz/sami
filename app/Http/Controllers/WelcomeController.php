<?php namespace App\Http\Controllers;

use Input;
use App\Servicios;
use App\Persona;
use App\Unidades;
use App\Producto;
use App\Usuarios;


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

	public function login()
	{
		return view('/pantallas/login');
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
	public function cargadeinventariopost()
	{
		//$servicio = Servicios::where("id_servicio",input::get("id_servicio"))->update(array(
						//"id_persona_conductor"=>input::get("conductor"),
		return view('/pantallas/cargadeinventario');
	}

	public function descargadeinventario()
	{
		return view('/pantallas/descargadeinventario');
	}

	public function listaserviciopendiente()
	{
		$Servicio = Servicios::where("status_pendiente_servicio",1)->get();
		return view('/pantallas/listaserviciopendiente',compact('Servicio'));
	}

	public function listaserviciopendienteporfinalizar()
	{
		$Servicio = Servicios::where("status_asignado_servicio",1)->get();
		return view('/pantallas/listaserviciopendienteporfinalizar',compact('Servicio'));
		//return view('/pantallas/listaserviciopendienteporfinalizar');
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
		$listapersona = Persona::where("paramedico_persona",1)->get();
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
		$listapersona = Persona::where("conductor_persona",1)->get();
		return view('/pantallas/listaconductor',compact('listapersona'));
	}

	public function asignacion_servicio_pendiente($id)
	{
		$conductores = Persona::where("conductor_persona",1)->where("disponibilidad_persona",1)->get();
		$paramedicos = Persona::where("paramedico_persona",1)->where("disponibilidad_persona",1)->get();
		$unidades = Unidades::where("disponibilidad_unidad",1)->get();
		return view('/pantallas/asignacion_servicio_pendiente',compact("conductores","paramedicos","unidades","id"));
	}

	public function post_asignacion_servicio_pendiente()
	{

		$servicio = Servicios::where("id_servicio",input::get("id_servicio"))->update(array(
						"id_persona_conductor"=>input::get("conductor"),
						"id_persona_paramedico"=>input::get("paramedico"),
						"id_unidad"=>input::get("unidad"),
						"status_pendiente_servicio"=>0,
						"status_asignado_servicio"=>1,
				));

		Persona::where("id_persona",input::get("conductor"))->update(array(
						"disponibilidad_persona" => 0,
						));

		Persona::where("id_persona",input::get("paramedico"))->update(array(
						"disponibilidad_persona" => 0,
						));
		
		Unidades::where("id_unidad",input::get("paramedico"))->update(array(
						"disponibilidad_unidad" => 0,
						));

		return redirect("/pantallas/listaserviciopendiente");
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
	
	public function formproductos()
	{
		return view('/pantallas/formproductos');
	}

	public function formgestionproductos()
	{
		return view('/pantallas/formgestionproductos');
	}

	public function listaproductos()
	{
		$listaproduct = Producto::all();
		return view('/pantallas/listaproductos',compact('listaproduct'));
	}

	public function gestionusuarios()
	{
		return view('/pantallas/gestionusuarios');
	}
	public function formcrearusuarios()
	{
		return view('/pantallas/formcrearusuarios');
	}

	public function FormFinalizarServicios($id)
	{
		return view('/pantallas/FormFinalizarServicios',compact("id"));
	}

	public function listausuarios()
	{
		$listausuario = Usuarios::all();
		return view('/pantallas/listausuarios',compact('listausuario'));
	}
	public function formcrearusuariospost()
	{
		$usuario = new Usuarios();
		$usuario->nombre_usuario = Input::get("inombre_usuario");
		$usuario->apellido_usuario = Input::get("iapellido_usuario");
		$usuario->ci_usuario = Input::get("ici_usuario");
		$usuario->correo_usuario = Input::get("icorreo_usuario");
		$usuario->cuenta_usuario = Input::get("icuenta_usuario");
		$usuario->contraseña_usuario = Input::get("icontraseña_usuario");
		
		$usuario->save();
		return view('/pantallas/formcrearusuarios');
	}


	public function formproductospost()
	{

		$productos = new Producto();
		$productos->nombre_producto = Input::get("inombre_producto");
		$productos->cantidad_producto = Input::get("icantidad_producto");
		$productos->presentacion_producto = Input::get("ipresentacion_producto");
		
		$productos->save();

		//dd($productos);
		return view('/pantallas/formgestionproductos');
	}
	



	public function formsericpost()
	{

		$servicio = new Servicios();
		$servicio->hora_solicitud_servicio = Input::get("ihora_solicitud");
		$servicio->hora_de_servicio = Input::get("ihora_servicio");
		$servicio->nombre_operador_seric = Input::get("inombre_operador_seric");
		$servicio->ci_operador_seric = Input::get("ici_operador_seric");
		$servicio->save();

		//dd($servicio);

		return redirect('/pantallas/formseric');
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

		//dd($servicio);

		return redirect('/pantallas/formradiofonica');
	}

public function formpreciudadanopost()
	{

	    $servicio = new Servicios();
	    $servicio->hora_solicitud_servicio = Input::get("ihora_solicitud");
	    $servicio->nombre_solicitante = Input::get("inombre_solicitante");
	    $servicio->cedula_solicitante = Input::get("ici_solicitante");
        $servicio->telefono_solicitante = Input::get("itelf_solicitante");
        $servicio->nombre_paciente = Input::get("inombre_paciente");
        $servicio->edad_paciente = Input::get("iedad_paciente");
        $servicio->idx_paciente = Input::get("iidx_paciente");
        $servicio->direccion_emergencia = Input::get("idireccion_emergencia");
        $servicio->facha_del_servicio = Input::get("ifecha_servicio");

		$servicio->save();

		//dd($servicio);

		return redirect('/pantallas/formpreciudadano');
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

		//dd($servicio);

		return redirect('/pantallas/formreferencia');
	}

public function formllamadatelefonicapost()
	{

	    $servicio = new Servicios();
	    $servicio->hora_solicitud_servicio = Input::get("ihora_solicitud"); 
	    $servicio->nombre_solicitante = Input::get("inombre_solicitante");
	    $servicio->cedula_solicitante = Input::get("ici_solicitante");
        $servicio->telefono_solicitante = Input::get("itelf_socilitante");        
        $servicio->direccion_emergencia = Input::get("idireccion_emergencia");
        $servicio->nombre_paciente = Input::get("inombre_paciente");        
        $servicio->edad_paciente = Input::get("iedad_paciente");        
        $servicio->idx_paciente = Input::get("iidx_paciente");
        $servicio->save();
       
		//dd($servicio);

		return redirect('/pantallas/formllamadatelefonica');
	}

public function formparamedicopost()
	{

	    $personas = new Persona();
	    $personas->nombre_persona = Input::get("inombre_persona");
	    $personas->apellido_persona = Input::get("iapellido_persona"); 
	    $personas->ci_persona = Input::get("ici_persona");
        $personas->telefono_persona = Input::get("itelefono_persona");        
        $personas->direccion_persona = Input::get("idireccion_persona");
        $personas->paramedico_persona = 1;
        $personas->save();


		return redirect('/pantallas/formparamedico');
	}

public function formconductorpost()
	{

	    $personas = new Persona();
	    $personas->nombre_persona = Input::get("inombre_persona");
	    $personas->apellido_persona = Input::get("iapellido_persona"); 
	    $personas->ci_persona = Input::get("ici_persona");
        $personas->telefono_persona = Input::get("itelefono_persona");        
        $personas->direccion_persona = Input::get("idireccion_persona");
        $personas->conductor_persona = 1;
        $personas->save();
       
		
		return redirect('/pantallas/formconductor');
	}

	public function formunidadpost()
	{

	    $unidades = new Unidades();
	    $unidades->placa_unidad = Input::get("iplaca_unidad");
	    $unidades->numero_unidad = Input::get("inumero_unidad"); 
	    $unidades->modelo_unidad = Input::get("imodelo_unidad");
        $unidades->save();
       
		//dd($unidades);

		return redirect('/pantallas/formunidad');
	}
	
}