<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreateCcostoRequest;
use Illuminate\Http\Request;
use App\Ccosto;
use App\Ciudade;
Use App\Area;

use App\Departamento;
Use Input;
class CcostoController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		
          $ccostos= Ccosto::orderBy('nombre','asc')->paginate(10);  
          return View('ccostos.index',compact('ccostos'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
		$departamentos = Departamento::select('id', 'nombre')->get();
        $areas = Area::select('id','area')->get();
		 Return View('ccostos.create',compact('departamentos','areas'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(CreateCcostoRequest $request)
	{
		$tercero = Ccosto::create($request->all());
       return redirect('ccostos');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}
    
     public function obtenerdepartamento(){
      	  	      
         
    	// Buscamos todos los estados de nuetra base
        $departamentos= Departamento::all();
        // Regresamos los estados obtenidos de la consulta
        return Response::json($departamentos);
    }
        

}
