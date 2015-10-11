<?php namespace couser\Http\Controllers;

use couser\Http\Requests;
use couser\Http\Controllers\Controller;

use Illuminate\Http\Request;

class CategoriasController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function getBuscarcategoria($id)
	{
		$noticias = \DB::table('noticias')
		->where('noticias.categorias_id',$id)
		->join('usuarios','usuarios.id','=','noticias.usuarios_id')
		->join('categorias','categorias.id','=','noticias.categorias_id')
		->select('noticias.*','categorias.nombre as tipo','usuarios.nombre as name','usuarios.apellido as last_name')
		->orderBy('created_at','DESC')
		->get();

		$cant = count($noticias);

		$programas = \DB::table('programas')
		->get();

		return view('index',compact('noticias','programas'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
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

}
