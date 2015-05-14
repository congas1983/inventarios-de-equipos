<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Ccosto extends Model {

	//
	 				protected $table = 'ccostos';

 			protected $fillable =['codigo','area_id','nombre','departamento','ciudad'];

   	public function empleado(){
		  return $this->hasMany('App\Empleado');
	}




		public function area(){
			return $this->belongsTo('App\Area');
					}

}

