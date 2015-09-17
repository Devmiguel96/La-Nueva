@extends('layout.nav2')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">Login</div>
				<div class="panel-body">
					@if (count($errors) > 0)
						<div class="alert alert-danger">
							<strong>Whoops!</strong> There were some problems with your input.<br><br>
							<ul>
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
					@endif
						{!! Form::open(['url' => ('auth/login'), 'method' => 'POST','class'=>'form-horizontal','role'=>'form']) !!}
						<input type="hidden" name="_token" value="{{ csrf_token() }}">

						<div class="form-group">
							{!! Form::label('email','Correo Electronico',['class'=>'col-md-4 control-label']) !!}
							<div class="col-md-6">
							<input type="email" name="email" id="email" class="form-control" required>
							</div>
						</div>

						<div class="form-group">
							{!! Form::label('password','Contraseña',['class'=>'col-md-4 control-label']) !!}
							<div class="col-md-6">
								<input type="password" name="password" id="password" class="form-control" required>
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
							<div class="text-center">
								<button type="submit" class="btn btn-warning" style="margin-right: 15px">
									L O G I N
								</button>
							</div>
						</div>
					{!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>
	<style>
		#footer{
			margin-top: 186px;
		}
	</style>
</div>
@endsection