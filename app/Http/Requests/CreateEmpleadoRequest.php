<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class CreateEmpleadoRequest extends Request {

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		return true;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		return [
			'cedula'=>'required|numeric|min:7|unique:empleados,cedula',
            'nombre'=>'required',
            'telefono'=>'required|min:3',
            'celular'=>'required|numeric|min:10',
            'email'=>'required',
            'ccosto_id'=>'required'
		];
	}

}
