@extends('head')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Noticia @foreach( $tipos as $tipo){!! $tipo->categoria !!}							</div>									
					<div class="panel-body">
					<a href="{{ url('/noticias/index') }}" class="btn btn-info" role="button">Atras</a>
					<center>
						<h1>{!! $noticias->titulo !!}</h1>
						<div class="col-md-8 col-md-offset-2">
								<img src="{{asset('storage/')}}/{{$noticias->foto}}" class="img-thumbnail" alt="...">
							<p>{!! $noticias->detalle !!}</p><br>
							<ul class="list-group">
							    <li class="list-group-item active"><strong>Comentarios</strong><span class="badge">{{ $cant }}</span></li>
							    @foreach($comentarios as $comentario)
							    	<li class="list-group-item"><strong>{!! $comentario->nombre !!} {!! $comentario->apellido !!} :</strong> {!! $comentario->descripcion !!}</li>
							    @endforeach
							</ul>
						</div>
							{!! Form::open(['route' => ['comentarios.show',$noticias->id], 'method' => 'GET','class'=>'row']) !!}
									<div class="form-group">
										<div class="col-md-8 col-md-offset-2">
											<div class="input-group">
											{!! Form::text('descripcion',null,['class'=>'form-control','placeholder'=>'Escribe tu Comentario...']) !!}
													<span class="input-group-btn">
													{!! Form::submit('Comentar',['class'=>'btn btn-warning']) !!}
													 </span>
											</div>
										</div>
									</div>
							{!! Form::close() !!}
					</center>
					
					
				</div>
				<div class="panel-footer">
					<blockquote>
  						<p><strong>Publicado por:</strong> {!! $tipo->name !!} {!! $tipo->last_name !!} </p>
  						<footer>Fecha: <cite title="Source Title">{{ $tipo->created_at }}</cite></footer>
					</blockquote>
				</div>
			</div>
			@endforeach
		</div>
	</div>
</div>
@endsection
