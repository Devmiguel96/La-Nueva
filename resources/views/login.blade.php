@extends('nav2')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">Login de Usuario</div>
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

					<form class="form-horizontal" role="form" method="POST" action="/couser/public/auth/login">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">

						<div class="form-group">
							{!! Form::label('email','Correo Electronico',['class'=>'col-md-4 control-label']) !!}
							<div class="col-md-6">
								{!! Form::text('email',null,['class'=>'form-control']) !!}
							</div>
						</div>

						<div class="form-group">
							{!! Form::label('password','Contraseña',['class'=>'col-md-4 control-label']) !!}
							<div class="col-md-6">
								{!! Form::password('password',['class'=>'form-control']) !!}
							</div>
						</div>

						<div class="form-group">
							<div class="col-md-6 col-md-offset-4">
								<div class="checkbox">
									<label>
										<input type="checkbox" name="remember">Recordarme
									</label>
								</div>
							</div>
						</div>

						<div class="form-group">
							<div class="col-md-6 col-md-offset-4">
								<button type="submit" class="btn btn-warning" style="margin-right: 15px">
									L O G I N
								</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
