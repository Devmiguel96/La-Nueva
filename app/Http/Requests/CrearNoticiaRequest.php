<?php namespace couser\Http\Requests;

use couser\Http\Requests\Request;

class CrearNoticiaRequest extends Request {

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
			'titulo' => 'required|min:30|max:200',
			'detalle' => 'required|min:40|max:1000',
			'foto' => 'required|mimes:jpeg,bmp,png',
		];
	}

}
