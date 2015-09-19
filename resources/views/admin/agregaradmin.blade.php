@extends('layout.nav2')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">Agregar Administrador</div>
				<div class="panel-body">
				@if (count($errors) > 0)
						<div id="error" class="alert alert-danger">
						Corriga los siguientes errores..<br><br>
							<ul>
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
					@endif
					
						{!! Form::open(['url' => ('admin/guardaradmin'), 'method' => 'POST']) !!}
	                     	<div class="form-group">
								{!! Form::label('nombre', 'Nombre') !!}
								{!! Form::text('nombre',null,['class'=>'form-control'])!!}
							</div>
							<div class="form-group">
								{!! Form::label('apellido', 'Apellido') !!}
								{!! Form::text('apellido',null,['class'=>'form-control'])!!}
							</div>
							<div class="form-group">
								{!! Form::label('email', 'Email') !!}
								{!! Form::email('email',null,['class'=>'form-control'])!!}
							</div>
							<div class="form-group">
								{!! Form::label('password', 'Password') !!}
								{!! Form::password('password',['class'=>'form-control'])!!}
							</div>
							<div class="form-group">
								<div class="col-md-6 col-md-offset-4">
									{!! Form::submit('REGISTRAR',['class' => 'btn btn-warning']) !!}
								</div>
							</div>
						{!! Form::close() !!}	
				</div>
			</div>
			
		</div>
	</div>
	<style>
		#footer{
			margin-top: 10px;
		}
	</style>
</div>
@endsection

