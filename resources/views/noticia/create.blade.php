@extends('layout.nav2')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">Agregar Noticia</div>
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
					{!! Form::open(['url' => ('/noticias/guardar'), 'method' => 'POST','enctype'=>'multipart/form-data','files' => true ]) !!}
                     	<div class="form-group">
							{!! Form::label('titulo', 'Titulo') !!}
							{!! Form::text('titulo', null, ['class' => 'form-control']) !!}
						</div>
						<div class="form-group">
							{!! Form::label('detalle', 'Detalle') !!}
							{!! Form::textarea('detalle', null, ['class' => 'form-control','rows'=>'3','id'=>'ckeditor']) !!}
							<script>
                                CKEDITOR.replace( 'ckeditor' );
                            </script>
						</div>
						<div class="form-group">
							{!! Form::label('categorias_id', 'Categoria') !!}
							<select name="categorias_id" class="form-control" id="categorias_id">
								@foreach ($categorias as $categoria)
									<option value="{{$categoria->id}}">{{$categoria->nombre }}</option>
								@endforeach
							</select>
						</div>
						<div class="form-group">
						    {!! Form::label('foto', 'Subir Imagen') !!}
						    {!! Form::file('foto') !!}
						    <p class="help-block">Seleccione una foto</p>
						</div>
						<div class="form-group">
							<div class="col-md-6 col-md-offset-4">
								{!! Form::submit('AGREGAR NOTICIAS',['class' => 'btn btn-warning']); !!}
							</div>
						</div>
					{!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
