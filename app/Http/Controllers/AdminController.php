<?php namespace couser\Http\Controllers;

use couser\Http\Requests;
use couser\Http\Controllers\Controller;
use couser\Usuario;
use couser\Noticia;
use Storage;
use Illuminate\Http\Request;

class AdminController extends Controller {



	public function __construct()
	{
		$this->middleware('auth');
		$this->middleware('is_admin');
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function getCrearadmin()
	{
		return view('admin.agregaradmin');
	}
	
	public function postGuardaradmin()
	{
		$usuario = new Usuario($request->all());
		$usuario->roles_id = '1';
		$usuario->save();

		return Redirect(url('admin/usuario'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function getUsuarios(Request $request)
	{		

		$usuarios = Usuario::name($request->get('name'))->paginate(15);
		$usuarios->setPath('');
		return view('admin.usuarios',compact('usuarios'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function getNoticias(Request $request)
	{
		$noticias = Noticia::nombre($request->get('name'))->paginate(10);
		$noticias->setPath('');
		
		return view('admin.noticias',compact('noticias'));
	}


	public function getTop10()
	{
		$usuarios = \DB::table('usuarios')
		->selectRaw('count(usuarios.id) as cantidad_noticias,nombre,apellido')
		->join('noticias','usuarios.id','=','noticias.usuarios_id')
		->groupBy('usuarios_id','nombre','apellido')
		->orderBy('cantidad_noticias','DESC')
		->limit(10)
		->get();
        
		return view('admin.top10',compact('usuarios'));
	}


	public function getFoto($id)
	{
		$noticias = Noticia::findOrFail($id);
		
		return view('admin.foto',compact('noticias'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function deleteEliminarnoticia($id,Request $request)
	{
		Noticia::destroy($id);

		$mensaje = 'Noticia Eliminada';

		if ($request->ajax())
		{
			return $mensaje;
		}
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function deleteEliminarusuario($id,Request $request)
	{
		Usuario::destroy($id);

		$mensaje = 'Usuario Eliminado';

		if ($request->ajax())
		{
			return $mensaje;
		}
	}

}
