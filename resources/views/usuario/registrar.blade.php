@extends('head')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">Registrar Usuarios</div>
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
						{!! Form::open(['route' => 'usuarios.store', 'method' => 'POST']) !!}
	                     	@include('usuario.partials.form')
							<div class="form-group">
								<div class="col-md-6 col-md-offset-4">
									{!! Form::submit('Registrar',['class' => 'btn btn-primary']) !!}
								</div>
							</div>
						{!! Form::close() !!}	
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
