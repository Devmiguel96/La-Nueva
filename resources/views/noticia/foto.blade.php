@extends('layout.nav2')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Imagen</div>
				<div class="panel-body">
					<a href="{{ url('/noticias/editar',Auth::user()->id) }}" class="btn btn-info pull-left" role="button">Atras</a>
					<div class="col-md-8 col-md-offset-2">
						<img src="{{asset('imagenes/')}}/{{$noticias->foto}}" class="img-thumbnail">
					</div>					
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
