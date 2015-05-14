<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\CreateTerceroRequest;
use App\Http\Requests\BuscarTerceroRequest;
use App\Http\Controllers\Controller;
use Input ,Session;


use App\Tercero;
class TerceroController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		
          $terceros= Tercero::orderBy('nombre','asc')->paginate(10);  
          return View('terceros.index',compact('terceros'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		 Return View('terceros.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(CreateTerceroRequest $request)
	{
	   $tercero = Tercero::create($request->all());
       return redirect('terceros');
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
	    $tercero = Tercero::find($id);

		return View('terceros.edit',compact('tercero'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(CreateTerceroRequest $request)
	{
	     $id =  $request->id;
        if(is_null($id))
        {
                return Redirect('editar_tercero/{id}');
        }
       
       $tercero = Tercero::create($request->all());
       return redirect('terceros');
      
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$tercero = Tercero::find($id);
        if(is_null($id))
        {
                return Redirect('terceros');
        }
       $tercero->delete();
       return Redirect('terceros');

	}
    	public function buscar()
    		{
		
    	  
		$input = Input::only(['campo', 'buscar']);

		$palabras = explode(' ', $input['buscar']);

		$terceros = Tercero::select();

		foreach ($palabras as $palabra)
		{
			$terceros->where($input['campo'], 'like', '%'. $palabra .'%')->paginate(10);
		}

		$terceros = $terceros->orderBy('nombre', 'ASC')->paginate(10);

		Session::flash('mensaje', 'Resultados con '. $input['campo'] .' <em>'. $input['buscar'] .'</em>');

		return View('terceros.index',compact('terceros'));





     	 //$terceros = Tercero::select('terceros')->where('nombre', 'LIKE', '%' . $keyword . '%')->get()->toArray();

         
          return View('terceros.index',compact('terceros'));
      


      
	}
}
