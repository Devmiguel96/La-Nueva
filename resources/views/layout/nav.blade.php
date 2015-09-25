<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=0.5">
    <meta name="description" content="Lanuevastereo K 18 #21 – 45 2do piso ofi # 3 Barrio centro Sabanalarga (Atlantico). 8783134-8780418. Movil:3016026767.">
    <meta name="keywords" content="emisora,lanueva,lanuevaestereo,101.6,sabanalarga,radio,lapirinola,noticias,janus">
    <meta name="author" content="Janus IT SAS">

    <title>La Nueva 101.6 MHZ</title>

    <link rel="icon" type="image/png" href="{{asset('/img/logo.png')}}" />

    <!-- Bootstrap Core CSS -->
    <link href="{{asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{asset('css/agency.css')}}" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<header>

    <div class="banner">
        <ul>
            <li><span class="centrado"><div class="container"><div class="intro-text">
                <div class="intro-lead-in">La Nueva 101.6 MHZ</div>
                <div class="intro-heading">la verdadera radio</div>
                <a class="page-scroll btn btn-xl"  href="javascript:window.open('http://www.ustream.tv/embed/14878799?v=3&amp;wmode=direct','La Nueva 101.6 Mhz, Primerisima!!!','width=600,height=400') "  id="transmision">Escuchar en vivo <span class="glyphicon glyphicon-volume-up"></span></a>
            </div></div></span><img src="{{asset('img/header1.jpg')}}" alt="">
            </li>
            <li><span></span>
            <img src="{{asset('img/header.jpg')}}" alt="">
            </li>
        </ul>
    </div>
<div class="container">
        
                 
                
                
        </div>

    </header>

<body id="page-top" class="index">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top">
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
                        <a class="navbar-brand page-scroll" id="texto" href="#page-top">La Nueva</a>
                    </ul>
                </div>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                        <li>
                            <a class="page-scroll" href="#portfolio">Noticias</a>
                        </li>
                        <li>
                            <a class="page-scroll" href="#services">Programación</a>
                        </li>
                        <li>
                            <a class="page-scroll" href="#about">Acerca de</a>
                        </li>
                        <li>
                            <a class="page-scroll" href="#team">Conocenos</a>
                        </li>
                        <li>
                            <a class="page-scroll" href="#contact">Contactos</a>
                        </li>
                    @if (Auth::guest())
                        <li>
                        <a href="{{ route('usuarios.index') }}" class="page-scroll" ><span class="glyphicon glyphicon-user" ></span> Login</a>
                        @elseif(Auth::user()->roles_id == 1)
                            <li class="dropdown">
                                <a href="#"  class="drop dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->nombre }} <span class="caret"></span></a>
                                <ul class="dropdown-menu menu1"   role="menu">
                                    <li><a href="{{ url('/noticias/crear') }}">Agregar Noticias</a></li>
                                    <li><a href="{{ route('usuarios.edit',Auth::user()->id) }}">Editar Perfil</a></li>
                                    <li><a href="{{ url('/noticias/editar',Auth::user()->id) }}">Editar mis
                                    Noticias</a></li>
                                    <li><a href="{{ route('usuarios.show',Auth::user()->id) }}">Ver Mis Noticias</a></li>
                                    <li><a href="{{ url('/admin/noticias') }}">Administrar Noticias</a></li>
                                    <li><a href="{{ url('/admin/usuarios') }}">Administrar Usuarios</a></li>
                                    <li><a href="{{ route('programas.index') }}">Administrar Programas</a></li>
                                    <li><a href="{{ url('/admin/crearadmin') }}">Agregar Administrador</a></li>
                                    <li><a href="{{ url('/admin/top10') }}">Top 10</a></li>
                                    
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
    <script src="{{ asset('js/jquery.js') }}"></script>

    <script src="js/functions.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="js/classie.js"></script>
    <script src="js/cbpAnimatedHeader.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="{{asset('js/agency.js')}}"></script>
    <script src="{{asset('js/unslider.js') }}"></script>



@yield('content')
@yield('script')
</body>
</html>
