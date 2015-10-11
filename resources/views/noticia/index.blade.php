@extends('layout.nav2')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12 ">
			<div class="panel panel-default">
				<div class="panel-heading">Noticias </div>
				@if(isset($cant))
						<div class="alert alert-info desaparecer" role="alert">
						<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
							<p class="bg-info"><strong>Resultados: {{ $cant}}</strong></p>
						</div>
				@endif
				<div class="panel-body">
					<center>
						@foreach($noticias as $noticia)
							<div class="col-sm-6 col-md-4">
								<div class="panel panel-default" >
									<a href="{{ url('/noticias/mostrar',$noticia->id) }}"class="list-group-item " >
										<div class="panel-heading">Categoria {!! $noticia->tipo !!}</div>
									    	<img  src="{{asset('storage/')}}/{{$noticia->foto}}" width="300" height="300" class="thumbnail" >
										    <div class="">
										       	<h3>{{ $titulos = str_limit($noticia->titulo, 25) }}</h3>
										        <p>{{ $detalles = str_limit($noticia->detalle, 44) }}</p>
										    </div>
										<div class="panel panel-footer">Publicado por: <h6><strong>{!! $noticia->name !!} {!! $noticia->last_name !!}</strong></h6><small>
										<?php 
				  						 	$fecha = $noticia->created_at;
				  						 	$dt = new DateTime($fecha);

											$hora = $dt->format('h:i:s.A');

											echo $dt->format('d-m-Y').' '.$hora;
				  						 ?></small>
										</div>
									</a>
								</div>
							</div>
						@endforeach
					</center>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection

@section('script')
<script>
	$(document).ready(function(){
    	setTimeout(function(){
        $(".desaparecer").fadeOut(13000);
    	});
	});
</script>
@endsection