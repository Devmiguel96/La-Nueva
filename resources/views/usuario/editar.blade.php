@extends('head')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Editar Usuario <strong>{{ $usuario->nombre }} {{ $usuario->apellido }}</strong>	</div>
				<div class="panel-body">
					@if (count($errors) > 0)
						<div class="alert alert-danger">
						Corriga los Siguientes Errores<br><br>
							<ul>
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
					@endif
						{!! Form::model($usuario,['route' => ['usuarios.update',$usuario->id], 'method' => 'PUT']) !!}
	                     	@include('usuario.partials.form')
							<div class="form-group">
								<div class="col-md-6 col-md-offset-4">
								    <a href="{{ url('home') }}" class="btn btn-danger">Cancelar</a>
									{!! Form::submit('Guardar',['class' => 'btn btn-primary']) !!}
								</div>
							</div>
						{!! Form::close() !!}	
						
				</div>
			</div>
		</div>
	</div>
</div>
@endsection