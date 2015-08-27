<?php namespace couser\Http\Requests;

use couser\Http\Requests\Request;
use couser\Usuario;

class CrearUsuarioRequest extends Request {

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
			'nombre'=>'required|min:5|max:45',
			'apellido'=>'required|min:5|max:45',
			'email'=>'required|email|unique:usuarios',
			'password'=>'required|min:5|max:30',
		];
	}

}
