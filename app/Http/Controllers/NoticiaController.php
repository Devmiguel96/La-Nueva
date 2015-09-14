<?php namespace couser\Http\Controllers;

use couser\Http\Requests;
use couser\Http\Controllers\Controller;
use couser\Http\Requests\CrearNoticiaRequest;
use couser\Noticia;
use couser\Comentario;
use Auth;

use Illuminate\Http\Request;

class NoticiaController extends Controller {

	public function __construct()
	{
		$this->middleware('auth',['except' => ['getIndex','getMostrar']]);
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function getIndex() //funcion retorna todas las noticias pagina principal
	{
		$noticias = \DB::table('noticias')
		->join('categorias','categorias.id','=','noticias.categorias_id')
		->join('usuarios','usuarios.id','=','noticias.usuarios_id')
		->orderBy('created_at','DESC')
		->select('noticias.*','categorias.nombre as tipo','usuarios.nombre as name','usuarios.apellido as last_name')
		->limit(6)
		->get();

		$programas = \DB::table('programas')
		->get();
	
		return view('index',compact('noticias','programas'));
	}

	public function getBuscarnoticias(Request $request)
	{
		$noticias = Noticia::nombre($request->get('noticia'))->paginate(15);

        $cant = count($noticias);

		return view('noticia.index',compact('noticias','cant'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function getCrear()
	{
		$categorias = \DB::table('categorias')
		->select('nombre','id')
		->get();

		return view('noticia.create',compact('categorias'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function postGuardar(CrearNoticiaRequest $request)
	{
		$file = $request->file('foto');

		$noticias = new Noticia([
			"titulo" =>	$request["titulo"],
			"detalle" => $request["detalle"],
			"categorias_id"	=> $request['categorias_id'],
			"foto" => $request->file("foto")->getClientOriginalName(),//nombre original de la foto
			"usuarios_id"=> Auth::User()->id //obtenemos el id del usuario
		]);

        if($noticias->save()){
        	//guardamos la imagen en public/img con el nombre original
        	$file->move(public_path('storage'),$file->getClientOriginalName());
			//redirigimos con un mensaje flash
			return Redirect('/noticias');
        } 
        
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function getMostrar($id)
	{
		$comentarios = \DB::table('noticias') //obtenemos los comentarios y quien lo publico
		->where('noticias.id',$id)
		->join('comentarios','noticias.id','=','comentarios.noticias_id')
		->join('usuarios','usuarios.id','=','comentarios.usuarios_id')
		->select('descripcion','nombre','apellido','comentarios.created_at as fecha')
		->orderBy('comentarios.created_at','DESC')
		->get();

		$tipos = \DB::table('noticias') //obtenemos la categoria de la noticia y los nombre de quien publico la noticia
		->where('noticias.id',$id)
		->join('categorias','categorias.id','=','noticias.categorias_id')
		->join('usuarios','usuarios.id','=','noticias.usuarios_id')
		->select('categorias.nombre as categoria','usuarios.nombre as name','usuarios.apellido as last_name','noticias.created_at')
		->get();

		$cant = count($comentarios); //obtenemos la cantidad de comentarios

		$noticias = Noticia::findOrFail($id);
		return view('noticia.mostrar',compact('noticias','tipos','comentarios','cant'));
		
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function getEditar($id)
	{
		$iduser = Auth::user()->id;
		if ($id == $iduser) {
			$noticias = \DB::table('usuarios')
			->where('usuarios.id',$id)
			->join('noticias','usuarios.id','=','noticias.usuarios_id')
			->select('noticias.*')
			->orderBy('created_at','DESC')
			->get();

			$cant = count($noticias);

			
			return view('noticia.misnoticias',compact('noticias','cant'));
		}
		
		return Redirect(url('/noticias/editar',$iduser));
	
	}

	public function getVer($idnoticia)
	{
		$iduser = Auth::user()->id;
		$noticias = \DB::table('noticias')
		->where('noticias.id',$idnoticia)
		->join('usuarios','usuarios.id','=','noticias.usuarios_id')
		->select('usuarios.id')
		->get();

		$cant = count($noticias);
		
		if ($cant >= 1) {
			foreach ($noticias as $noticia) {
				$id = $noticia->id;
			}

			if ($iduser == $id) {
				$noticia = Noticia::findOrFail($idnoticia);
				$categorias = \DB::table('categorias')->select('nombre','id')->get();
				return view('noticia.editar',compact('noticia','categorias'));
			}
			
			return Redirect(url('/noticias/editar',$iduser));
		}
		
		return Redirect(url('/noticias/editar',$iduser));

	}

	public function getFoto($id)
	{
		$noticias = Noticia::findOrFail($id);
		
		return view('noticia.foto',compact('noticias'));
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function putActualizar(CrearNoticiaRequest $request , $id)
	{
		$file = $request->file('foto');

		$noticias = Noticia::findOrFail($id);
		$noticias->fill($request->all());
		$noticias->usuarios_id = Auth::User()->id; //obtenemos el id del usuario
		$noticias->foto = $request->file("foto")->getClientOriginalName();//nombre original de la foto

		if($noticias->save()){
        	//guardamos la imagen en public/img con el nombre original
        	$file->move(public_path('storage'),$file->getClientOriginalName());
			//redirigimos con un mensaje flash
			return Redirect('/noticias');
        }
        
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function deleteEliminar($id,Request $request)
	{
		/*$nombres = \DB::table('noticias')
		->where('noticias.id',$id)
		->select('noticias.*')
		->get();
		foreach ($nombres as $nombre) {
			$var = $nombre->foto;
		}
		
		\File::delete($var);
		*/
		Noticia::destroy($id);

		$mensaje = 'Noticia Eliminada';

		if ($request->ajax())
		{
			return $mensaje;
		}
		
	}

}
