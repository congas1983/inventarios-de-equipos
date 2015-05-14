<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Ciudade extends Model {

	//
	protected $table='ciudades';


	public function departamentos() {
		return $this->belongsTo('App\Departamento');
      


}
}
