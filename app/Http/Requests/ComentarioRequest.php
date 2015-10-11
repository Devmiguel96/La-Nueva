<?php namespace couser\Http\Requests;

use couser\Http\Requests\Request;

class ComentarioRequest extends Request {

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
			'descripcion' => 'required|min:4|max:250',
		];
	}

}
