<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Use App\Departamento;

Route::get('/', 'HomeController@index');

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
 
Route::get('terceros', [
		'as' => 'terceros',
		'uses' => 'TerceroController@index',
        'middleware' =>'auth' 
	]);
   
Route::get('crear_tercero', [
		'as' => 'crear_tercero',
		'uses' => 'TerceroController@create',
        'middleware' =>'auth' 
	]);
Route::post('guardar_tercero', [
		'as' => 'guardar_tercero',
		'uses' => 'TerceroController@store',
        'middleware' =>'auth' 	]); 
        
Route::get('editar_tercero/{id}', [
		'as' => 'editar_tercero',
		'uses' => 'TerceroController@edit',
        'middleware' =>'auth' 
	]);
    	Route::post('actualizar_tercero', [
		'as' => 'actualizar_tercero',
		'uses' => 'TerceroController@update',
        'middleware' =>'auth' 
	]);
    Route::get('buscar_tercero', [
			'as' => 'buscar_tercero',
			'uses' => 'TerceroController@buscar',
			 'middleware' =>'auth' 
	]);

Route::get('borrar_tercero/{id}', [
		'as' => 'borrar_tercero',
		'uses' => 'TerceroController@destroy',
        'middleware' =>'auth' 
]);


///-------------------------------------------------------------------
    Route::get('areas', [
		'as' => 'areas',
		'uses' => 'AreaController@index',
        'middleware' =>'auth' 
	]);
    
  Route::get('crear_area', [
		'as' => 'crear_area',
		'uses' => 'AreaController@create',
        'middleware' =>'auth' 
	]);
    

  Route::post('guardar_area', [
		'as' => 'guardar_area',
		'uses' => 'AreaController@store',
        'middleware' =>'auth' 	]);   
  


  Route::get('editar_area/{id}', [
		'as' => 'editar_area',
		'uses' => 'AreaController@edit',
        'middleware' =>'auth' 
	]);
    
     Route::get('actualizar_area', [
		'as' => 'actualizar_area',
		'uses' => 'AreaController@update',
        'middleware' =>'auth' 
]);

//--------------------------------------------------
     Route::get('ccostos', [
		'as' => 'ccostos',
		'uses' => 'CcostoController@index',
        'middleware' =>'auth' 
	]);
    

    Route::get('crear_costo', [
		'as' => 'crear_costo',
		'uses' => 'CcostoController@create',
        'middleware' =>'auth' 
	]);
      
      Route::post('guardar_ccosto', [
		'as' => 'guardar_ccosto',
		'uses' => 'CcostoController@store',
        'middleware' =>'auth' 	]);   
  
    
      Route::get('buscar_costo', [
			'as' => 'buscar_costo',
			'uses' => 'CcostoController@buscar',
			 'middleware' =>'auth' 
	]);




Route::get('dropdown', function(){
	$id = Input::get('option');
	$procesos = Departamento::find($id)->ciudades;
	return $procesos->lists('nombre', 'id');
});


Route::get('empleados', [
		'as' => 'empleados',
		'uses' => 'EmpleadoController@index',
        'middleware' =>'auth' 
	]);


    Route::get('crear_empleado', [
		'as' => 'crear_empleado',
		'uses' => 'EmpleadoController@create',
        'middleware' =>'auth' 
	]);
Route::post('guardar_empleado', [
		'as' => 'guardar_empleado',
		'uses' => 'EmpleadoController@store',
        'middleware' =>'auth' 
	]);

	 Route::get('buscar_empleado', [
			'as' => 'buscar_empleado',
			'uses' => 'EmpleadoController@buscar',
			 'middleware' =>'auth' 
	]);
