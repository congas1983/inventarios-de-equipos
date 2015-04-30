<?php namespace Laravel;

use Illuminate\Database\Eloquent\Model;


class Tercero extends Model {

	//

    protected $table='terceros';
    
    protected $fillable =[
           'nit','nombre','rol','direccion','telefono','email','notas'
                          ];

}
}
