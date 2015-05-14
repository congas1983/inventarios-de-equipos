<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Area extends Model {

	//
		 protected $table = 'areas';

		 protected $fillable =['codigo','nombre'];

 	public function ccostos(){
       
        return $this->hasMany('App\Ccosto');

 					}
 					public function user()
	{
		$this->belongsTo('User');
	}
}
