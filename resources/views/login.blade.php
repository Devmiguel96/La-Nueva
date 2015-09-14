@extends('layout.nav2')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">Login de Usuario</div>
				<div class="panel-body">
					
					{!! Form::open(['url' => ('auth/login'), 'method' => 'POST','class'=>'form-horizontal','role'=>'form']) !!}
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
					{!! Form::close() !!}
				</div>
			</div>
			@if (count($errors) > 0)
				<div id="error" class="alert alert-danger">
					Corriga los Siguientes Errores<br><br>
					<ul>
						@foreach ($errors->all() as $error)
							<li>{{ $error }}</li>
							@endforeach
					</ul>
				</div>
			@endif
		</div>
	</div>
	<style>
		#footer{
			margin-top: 186px;
		}
	</style>
</div>
@endsection
@section('script')
<script>
	$(document).ready(function(){
		if ($('#error').is(":visible")) 
		{
			$('#error').fadeOut(5000);
		};
	});
</script>
@endsection
