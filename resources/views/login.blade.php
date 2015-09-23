@extends('layout.nav2')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">Login de Usuario</div>
				<div class="panel-body">
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
			<script>
	          (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	          })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	          ga('create', 'UA-67887921-1', 'auto');
	          ga('send', 'pageview');

    	</script>
		</div>
	</div>
	<style>
		#footer{
			margin-top: 186px;
		}
	</style>
</div>
@endsection
