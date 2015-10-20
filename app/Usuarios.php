<?php namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;


class Usuarios extends Model {
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 't_usuarios';

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
