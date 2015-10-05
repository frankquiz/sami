<?php namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;


class Persona extends Model {
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 't_persona';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	public $timestamps = false;

}

