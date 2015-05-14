<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Empleado extends Model {

	//

	protected $table='empleados';

	
	 protected $fillable =['cedula','nombre','telefono','celular','email','ccosto_id'];


	 public function ccosto(){
			return $this->belongsTo('App\Ccosto');
					}


}
