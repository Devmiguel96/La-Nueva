<?php namespace couser\Http\Controllers;

use couser\Http\Requests;
use couser\Http\Controllers\Controller;
use couser\Http\Requests\ProgramasRequest;
use couser\Programa;
use Illuminate\Http\Request;

class ProgramasController extends Controller {


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
	public function index()
	{
		$programas = \DB::table('programas')->get();

		return view('programa.index',compact('programas'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('programa.crear');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(ProgramasRequest $request)
	{
		$cadena = '';
		foreach ($_POST['horario'] as $id){
			$s = ' , ';
			if($cadena == ''){
				$cadena =$id;
			}else{
				$cadena .= $s.$id;
			}
		}
		$programa = new Programa($request->all());
		$programa->horario = $cadena;
		$programa->save();

		return redirect(route('programas.index'));
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
		$programas = Programa::findOrFail($id);

		return view('programa.editar',compact('programas'));
		
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(ProgramasRequest $request,$pro)
	{
		$programas = Programa::findOrFail($pro);
		$programas->fill($request->all());
		$programas->save();

		return Redirect(route('programas.index'));
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id,Request $request)
	{
		Programa::destroy($id);

		$mensaje = 'Programa Eliminado';

		if ($request->ajax())
		{
			return $mensaje;
		}
	}

}
