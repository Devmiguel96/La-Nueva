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
							<strong>Whoops!</strong> Complete los Campos<br><br>
							<ul>
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
					@endif
						{!! Form::open(array('url' => '/usuarios/store', 'method' => 'GET')) !!}
	                     	<div class="form-group">
								{!! Form::label('nombre', 'Nombre') !!}
								{!! Form::text('nombre', null, ['class' => 'form-control']) !!}
							</div>
							<div class="form-group">
								{!! Form::label('apellido', 'Apellido') !!}
								{!! Form::text('apellido', null, ['class' => 'form-control']) !!}
							</div>
							<div class="form-group">
							    {!! Form::label('email', 'Email') !!}
								{!! Form::email('email', null, ['class' => 'form-control']) !!}
							</div>
							<div class="form-group">
							    {!! Form::label('password', 'Password') !!}
								{!! Form::password('password', ['class' => 'form-control']) !!}
							</div>
							<div class="form-group">
								<div class="col-md-6 col-md-offset-4">
									<button type="submit" class="btn btn-success">
										Registrar
									</button>
								</div>
							</div>
						{!! Form::close() !!}	
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
