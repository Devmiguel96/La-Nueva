<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>La Nueva 101.6 MHZ</title>

    <link href="{{asset('css/agency2.css')}}" rel="stylesheet">
    
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/sweetalert.css') }}" rel="stylesheet">

    <link href="{{asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="icon" type="image/png" href="{{asset('/img/logo.png')}}" />
    
    <!-- Fonts -->
    <link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>
    <script src="{{ asset('/js/ckeditor/ckeditor.js')}}"></script>
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

    <script src="{{ asset('/css/sweetalert.min.js') }}"></script>
</head>

<body id="page-top" class="index">

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-static-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <div>
                    <ul class="nav navbar-nav navbar-right">
                        <li><img class="logo" src="{{asset('/img/logo.png')}}" width="50px" height="50px" alt=""></li>
                        <a class="navbar-brand page-scroll" id="texto1" href="{{ url('/noticias') }}">La Nueva 101.6 mhz</a>
                    </ul>
                </div>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    @if (Auth::guest())
                        <li><a href="{{ route('usuarios.index')}}" ><span class="glyphicon glyphicon-lock" ></span> Login</a></li>
                        <li><a href="{{ route('usuarios.create') }}"><span class="glyphicon glyphicon-user" ></span> Registrarse</a></li>
                        @elseif(Auth::user()->IsAdmin())
                            <li class="dropdown">
                                <a href="#"  class="drop  dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->nombre }}<span class="caret"></span></a>
                                <ul class="menu1 dropdown-menu" role="menu">
                                    <li><a  href="{{ url('/noticias/crear') }}">Agregar Noticias</a></li>
                                    <li><a href="{{ route('usuarios.edit',Auth::user()->id) }}">Editar Perfil</a></li>
                                    <li><a href="{{ url('/noticias/editar',Auth::user()->id) }}">Editar mis
                                    Noticias</a></li>
                                    <li><a href="{{ route('usuarios.show',Auth::user()->id) }}">Ver Mis Noticias</a></li>
                                    <li><a href="{{ url('/admin/noticias') }}">Administrar Noticias</a></li>
                                    <li><a href="{{ url('/admin/usuarios') }}">Administrar Usuarios</a></li>
                                    <li><a href="{{ route('programas.index') }}">Administrar Programas</a></li>
                                    <li><a href="{{ url('/admin/top10') }}">Top 10</a></li>
                                    <li><a href="{{ url('/admin/crearadmin') }}">Agregar Admin</a></li>
                                    <li><a href="{{ url('/auth/logout') }}">Cerrar Session</a></li>
                                </ul>
                            </li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="drop dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->nombre }}<span class="caret"></span></a>
                                <ul class="dropdown-menu menu1"  role="menu">
                                    <li><a href="{{ route('usuarios.edit',Auth::user()->id) }}">Editar Perfil</a></li>
                                    <li><a href="{{ url('/auth/logout') }}">Cerrar Session</a></li>
                                </ul>
                            </li>

                    @endif
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
         <!-- jQuery -->

    <!-- Scripts -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    
  
@yield('content')
<footer id="footer">
    <div class="container">
        <div class="row">
            <span class="copyright">Copyright &copy; 2015. Design by <span class="janus">Janus IT SAS</span></span>
        </div>
    </div>
</footer>
@yield('script')

</body>
</html>
