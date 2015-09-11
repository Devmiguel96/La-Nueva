@extends('nav2')

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
                     	<div class="form-group">
							{!! Form::label('titulo', 'Titulo') !!}
							{!! Form::text('titulo', null, ['class' => 'form-control']) !!}
						</div>
						<div class="form-group">
							{!! Form::label('detalle', 'Detalle') !!}
							{!! Form::text('detalle', null, ['class' => 'form-control']) !!}
						</div>
						<div class="form-group">
							{!! Form::label('categorias_id', 'Tipo de Noticia') !!}
							{!! Form::select('categorias_id', ['1' => 'Deportiva', '2' => 'Judicial', '3' => 'Tecnologica'],null,['class' => 'form-control']) !!}
						</div>
						<div class="form-group">
						    {!! Form::label('foto', 'Foto') !!}
						    {!! Form::file('foto') !!}
						    <p class="help-block">Seleccione una foto</p>
						</div>
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
