<?php namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;


class Servicios extends Model {
	

	protected $table = 't_servicios';

	public $timestamps = false;


	public function getConductor(){
		$persona = Persona::where('id_persona',$this->id_persona_conductor)->first();
		//dd($conductor);
		return $persona->nombre_persona." ".$persona->apellido_persona;
		//return $this->id_persona_conductor;
	}
	
	public function getParamedico(){
		$persona = Persona::where('id_persona',$this->id_persona_paramedico)->first();
		return $persona->nombre_persona." ".$persona->apellido_persona;

	}
}
