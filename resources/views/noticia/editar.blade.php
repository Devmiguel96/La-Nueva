@extends('layout.nav2')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">Editar Noticia</div>
				<div class="panel-body">
					@if (count($errors) > 0)
						<div class="alert alert-danger">
						Corriga los siguientes errores..<br><br>
							<ul>
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
					@endif
					{!! Form::model($noticia,['url' => ['/noticias/actualizar',$noticia->id], 'method' => 'PUT','enctype'=>'multipart/form-data','files' => true ]) !!}
                     	@include('noticia.partials.form')
                     	<div class="form-group">
							<div class="col-md-6 col-md-offset-4">
								<a href="{{ url('/noticias/editar',Auth::user()->id) }}" class="btn btn-danger" role="button">Cancelar</a>
							{!! Form::submit('Actualizar Noticia',['class' => 'btn btn-primary']); !!}
							</div>
						</div>
					{!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>
</div>
@endsection