<?php namespace couser\Http\Requests;

use couser\Http\Requests\Request;
use Illuminate\Routing\Route;

class EditarUsuarioRequest extends Request {

	private $route;

	public function __construct(Route $route)
	{
		$this->route = $route;
	}

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
		//dd('unique:usuarios,email,'.$this->route->getParameter('usuarios'));
		return [
			'nombre'=>'required|min:5|max:45',
			'apellido'=>'required|min:5|max:45',
			'email'=>'unique:usuarios,email,'.$this->route->getParameter('usuarios'),
			'password'=>'min:8|max:30'
		];
	}

}
