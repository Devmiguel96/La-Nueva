<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>La Nueva 101.6 MHZ</title>

	<link href="{{ asset('/css/app.css') }}" rel="stylesheet">
	<link href="{{ asset('/css/sweetalert.css') }}" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<link rel="icon" type="image/png" href="{{asset('/img/logo.png')}}" />
	
	<!-- Fonts -->
	<link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>
	<script src="{{ asset('/js/ckeditor/ckeditor.js')}}"></script>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="{{ asset('/css/sweetalert.min.js') }}"></script>
</head>
<body>
	<nav class="navbar navbar-inverse">
		<div class="container-fluid">
			<div class="navbar-header ">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle Navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="{{ url('/noticias') }}">La Nueva 101.6 MHZ</a>
			</div>

			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

				<ul class="nav navbar-nav navbar-right">
					@if (Auth::guest())
						<li><a href="{{ url('/usuarios') }}">Login</a></li>
						<li><a href="{{ route('usuarios.create') }}">Registrarse</a></li>
					@elseif(Auth::user()->IsAdmin())
					<li>{!! Form::open([
								'url'=>'/noticias/buscarnoticias',
								'method'=>'GET',
								'class'=>'navbar-form navbar-right',
								'role'=>'search'
								]) !!}
								    <div class="form-group">
								    	<div class="input-group">
								    			<span class="input-group-btn">
											        <button type="button" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Buscar por Categorias <span class="caret"></span></button>
											        <ul class="dropdown-menu" role="menu">
														<li><a href="{{ url('/categorias/buscarcategoria/3') }}">Noticias Tecnologicas</a></li>
														<li><a href="{{ url('/categorias/buscarcategoria/1') }}">Noticias Deportiva</a></li>
														<li><a href="{{ url('/categorias/buscarcategoria/2') }}">Noticias Judiciales</a></li>
													</ul>
											    </span>
									      		{!! Form::text('noticia',null,['class'=>'form-control input-sm','placeholder'=>'Titulo de la Noticia'])!!}
									      		<span class="input-group-btn">
									        	<button type="submit" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-search"></span> Buscar </button>
									      		</span>
									    </div>
								    </div>
						    {!! Form::close() !!}</li>
							<li><a href="{{ url('/noticias') }}">Inicio</a></li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->nombre }} {{ Auth::user()->apellido }} <span class="caret"></span></a>
							<ul class="dropdown-menu"  role="menu">
								<li><a  href="{{ url('/noticias/crear') }}">Publicar Noticias</a></li>
								<li><a href="{{ route('usuarios.edit',Auth::user()->id) }}">Editar Perfil</a></li>
								<li><a href="{{ url('/noticias/editar',Auth::user()->id) }}">Editar mis
								Noticias</a></li>
								<li><a href="{{ route('usuarios.show',Auth::user()->id) }}">Ver Mis Noticias</a></li>
								<li><a href="{{ url('/admin/noticias') }}">Administrar Noticias</a></li>
								<li><a href="{{ route('programas.index') }}">Administrar Programas</a></li>
								<li><a href="{{ url('/admin/usuarios') }}">Administrar Usuarios</a></li>
								<li><a href="{{ url('/admin/top10') }}">Top 10</a></li>
								<li><a href="{{ url('/auth/logout') }}">Cerrar Session</a></li>
							</ul>
						</li>


					@else
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Categorias<span class="caret"></span></a>
							<ul class="dropdown-menu" role="menu">
								<li><a href="{{ url('/categorias/buscarcategoria/3') }}">Noticias Tecnologicas</a></li>
								<li><a href="{{ url('/categorias/buscarcategoria/1') }}">Noticias Deportiva</a></li>
								<li><a href="{{ url('/categorias/buscarcategoria/2') }}">Noticias Judiciales</a></li>
							</ul>
						</li>
						<li>{!! Form::open([
								'url'=>'/noticias/buscarnoticias',
								'method'=>'GET',
								'class'=>'navbar-form navbar-right',
								'role'=>'search'
								]) !!}
								    <div class="form-group">
								        {!! Form::text('noticia',null,['class'=>'form-control input-sm','placeholder'=>'Titulo de la Noticia'])!!}
								    </div>
						    	<button type="submit" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-search"></span> Buscar </button>
							{!! Form::close() !!}</li>

						<li><a href="{{ url('/noticias') }}">Inicio</a></li>
						
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->nombre }} {{ Auth::user()->apellido }} <span class="caret"></span></a>
							<ul class="dropdown-menu" role="menu">
								<li><a  href="{{ url('/noticias/crear') }}">Publicar Noticias</a></li>
								<li><a href="{{ route('usuarios.edit',Auth::user()->id) }}">Editar Perfil</a></li>
								<li><a href="{{ url('/noticias/editar',Auth::user()->id) }}">Editar mis
								Noticias</a></li>
								<li><a href="{{ route('usuarios.show',Auth::user()->id) }}">Ver Mis Noticias</a></li>
								<li><a href="{{ url('/auth/logout') }}">Cerrar Session</a></li>
							</ul>
						</li>
					@endif
				</ul>
			</div>
		</div>
	</nav>

	@yield('content')

	<!-- Scripts -->
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	
	@yield('script')
</body>
</html>
