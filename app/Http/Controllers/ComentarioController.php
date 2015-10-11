<?php namespace couser\Http\Controllers;

use couser\Http\Requests;
use couser\Http\Controllers\Controller;
use couser\Http\Requests\ComentarioRequest;
use couser\Comentario;
use Auth;
use Illuminate\Http\Request;

class ComentarioController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		
		

		//return Redirect('/noticias/mostrar/'.$idNoticia);
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show(ComentarioRequest $request,$idNoticia)
	{
		$mensaje = 'Comentario Creado';

		if ($request->ajax())
		{
			$comentario = new Comentario($request->all());
			$comentario->usuarios_id = Auth::User()->id;
			$comentario->noticias_id = $idNoticia;
			$comentario->save();

			return $mensaje;
			
			
		}
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

}
