<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class CreateCcostoRequest extends Request {

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
			'codigo'=>'required|min:4|numeric',
            'area_id'=>'required',
            'nombre'=>'required|min:3',
            'departamento'=>'required',
            'ciudad'=>'required'
            ];
	}

}
