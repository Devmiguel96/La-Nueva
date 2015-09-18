<?php namespace couser\Http\Controllers;

use couser\Http\Requests;
use couser\Http\Requests\CrearUsuarioRequest;
use couser\Http\Requests\EditarUsuarioRequest;
use couser\Http\Controllers\Controller;
use Auth;
use couser\Usuario;
use couser\Noticia;

class UsuarioController extends Controller {



	public function __construct()
	{
		$this->middleware('auth',['except' => ['store','create']]);
		$this->middleware('is_admin',['only' => ['show']]);
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('login');
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('usuario.registrar');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(CrearUsuarioRequest $request)
	{	if (Auth::user()->roles_id == 1) 
		{
			$usuario = new Usuario($request->all());
			$usuario->roles_id = '1';
			$usuario->save();

			return Redirect('/');
		}else{
			$usuario = new Usuario($request->all());
			$usuario->roles_id = '2';
			$usuario->save();

			return Redirect('/');
		}
		
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$iduser = Auth::user()->id;
		if ($id == $iduser) {
			$noticias = \DB::table('noticias')
			->where('noticias.usuarios_id',$id)
			->join('categorias','categorias.id','=','noticias.categorias_id')
			->join('usuarios','usuarios.id','=','noticias.usuarios_id')
			->orderBy('created_at','DESC')
			->select('noticias.*','categorias.nombre as tipo','usuarios.nombre as name','usuarios.apellido as last_name')
			->get();

		return view('noticia.index',compact('noticias'));
		}
		
		return Redirect(route('usuarios.show',$iduser));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit( $id)
	{
		$iduser = Auth::user()->id;
		if ($id == $iduser) {
			$usuario = Usuario::findOrFail($id);
			return view('usuario.editar',compact('usuario'));
		}
		return Redirect(route('usuarios.edit',$iduser));
		
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(EditarUsuarioRequest $request, $id)
	{
		$iduser = Auth::user()->id;
		if ($id == $iduser) {
			$usuario = Usuario::findOrFail($id);
			$usuario->fill($request->all());
			$usuario->save();

			return Redirect('/noticias');
		}
		return Redirect()->back();
		
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		
	}

}
