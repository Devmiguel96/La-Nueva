@extends('nav2')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Editar Programa
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
						{!! Form::model($programas,['route' => ['programas.update',$programas->id], 'method' => 'PUT']) !!}
	                     	@include('programa.partials.form')
							<div class="form-group">
								<div class="col-md-6 col-md-offset-4">
								    <a href="{{ route('programas.index') }}" class="btn btn-danger">Cancelar</a>
									{!! Form::submit('Guardar',['class' => 'btn btn-warning']) !!}
								</div>
							</div>
						{!! Form::close() !!}	
						
				</div>
			</div>
		</div>
	</div>
</div>
@endsection