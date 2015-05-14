<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Departamento extends Model {

	//
    protected $table='departamentos';

    public function ciudades() {
		return $this->hasMany('App\Ciudade');
	}

}
