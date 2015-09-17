@extends('layout.nav2')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading"><strong>Categoria</strong>@foreach( $tipos as $tipo){!! $tipo->categoria !!}							</div>									
					<div class="panel-body">
					<p class="by text-left"><strong>Por:</strong> {!! $tipo->name !!} {!! $tipo->last_name !!} </p>
  						<p class="time text-left"><span class="glyphicon glyphicon-time"></span>
  						 <?php 
  						 	$fecha = $tipo->created_at;
  						 	$dt = new DateTime($fecha);

							$h = $dt->format('h:i:s.A');

							echo $dt->format('d-m-Y').' '.$h;
  						 ?></p>
					
						<h1 class="text-center titulo" >{!! $noticias->titulo !!}</h1>
						<div class="col-md-8 col-md-offset-2">
								<img src="{{asset('storage/')}}/{{$noticias->foto}}"  class="img-thumbnail"  alt="...">
							<p class="text-left">{!! $noticias->detalle !!}</p><br>
							<ul class="list-group">
							    <li class="list-group-item active"><img  src="{{ asset('img/comen.png') }}" alt="Comentario" title="Comentarios"> <strong>{{ $cant }} Comentarios</strong></li>
							    @foreach($comentarios as $comentario)
							    <li class="list-group-item" ><p class="text-left"><strong>{{ $cant--}}. <span class="glyphicon glyphicon-user"></span> {!! $comentario->nombre !!} {!! $comentario->apellido !!}</strong></p>
									<p class="text-left fecha" > <?php 
			  						 	$fecha = $comentario->fecha;
			  						 	$dt = new DateTime($fecha);

										$hora = $dt->format('h:i:s.A');

										echo $dt->format('d-m-Y').' '.$hora;
  						 			?></p>
							    	<p class="text-left des" >{!! $comentario->descripcion !!}</p>
								</li>
							    
							    	  
							    @endforeach
							</ul>
							@if(Auth::guest())
								<h6><a class="texto" href="{{ route('usuarios.index')}}">Inicia session</a> o <a class="texto" href="{{ route('usuarios.create') }}">registrate</a>  para poder Comentar las Noticias</h6>
							@endif
						</div>
						
						@if(Auth::user())
							{!! Form::open(['route' => ['comentarios.show',$noticias->id], 'method' => 'GET','class'=>'row','id'=>'form-comentar']) !!}
								<input type="hidden" name="_token" value="{{ csrf_token() }}">
									<div class="form-group">
										<div class="col-md-8 col-md-offset-2">
											<div class="input-group">
											{!! Form::text('descripcion',null,['class'=>'form-control','placeholder'=>'Escribe tu Comentario...','id'=>'comentario','required']) !!}
													<span class="input-group-btn">
													{!! Form::submit('Comentar',['class'=>'btn btn-warning comentar']) !!}
													 </span>
											</div>
										</div>
									</div>
							{!! Form::close() !!}
						@endif
				</div>
				@if (count($errors) > 0)
						<div class="alert alert-danger">
						Corriga los siguientes Errores..<br><br>
							<ul>
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
					@endif
			</div>
			@endforeach
		</div>
	</div>
</div>
@endsection
@section('script')
<script>
	$(document).ready(function(){
    	$('.comentar').click(function(e){

    		if($("#comentario").val() == ""){
		        alert("El campo comentario esta vacío.");
		        $("#comentario").focus();

		        return false;
   			}else{
   				e.preventDefault();

	    		var form = $('#form-comentar');
	    		var url = form.attr('action');
	    		var data = form.serialize();
					  
				$.get(url, data, function(result){
					location.reload();
				});
   			}

    		


    	});
	});
</script>
@endsection
