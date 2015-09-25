@extends('layout.nav')

@section('content')

    <!-- Noticias Section -->
    
    <section id="portfolio" class="bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Noticias</h2>
                    <!--{!! Form::open(['url'=>'/noticias/buscarnoticias','method'=>'GET','class'=>'navbar-form','role'=>'search']) !!}
                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-btn">
                                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Buscar por Categorias <span class="caret"></span></button>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href="{{ url('/categorias/buscarcategoria/3') }}">Noticias Tecnologicas</a></li>
                                        <li><a href="{{ url('/categorias/buscarcategoria/1') }}">Noticias Deportiva</a></li>
                                        <li><a href="{{ url('/categorias/buscarcategoria/2') }}">Noticias Judiciales</a></li>
                                    </ul>
                                    </span>
                                    {!! Form::text('noticia',null,['class'=>'form-control','placeholder'=>'Titulo de la Noticia'])!!}
                                        <span class="input-group-btn">
                                        <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search"></span> Buscar </button>
                                    </span>
                            </div>
                        </div>
                            {!! Form::close() !!}-->
                    
                    <h3 class="section-subheading text-muted">Emisora La Nueva 101.6 MHZ, de Sabanalarga.</h3>
                </div>

            </div>
            <div class="row">
                @foreach($noticias as $noticia)
                    <div class="col-md-4 col-sm-6 portfolio-item">
                        <a href="{{ url('/noticias/mostrar',$noticia->id) }}" class="portfolio-link" >
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content">
                                    <i class="fa fa-plus fa-3x"></i>
                                </div>
                            </div>
                            <img src="{{asset('storage/')}}/{{$noticia->foto}}" class="imgnoticias" alt="">
                        </a>
                        <div class="portfolio-caption">
                            <h4>{{ $titulos = str_limit($noticia->titulo, 40) }}</h4>
                            <a href="{{ url('/noticias/mostrar',$noticia->id) }}"><p class="text-muted">leer mas...</p></a>
                            
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Programas Section -->
    <section id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Programación.</h2>
                    <h3 class="section-subheading text-muted">Emisora La Nueva 101.6 MHZ, de Sabanalarga.</h3>
                </div>
            </div>
            <div class="row">
                <table class="table table-hover">
                    <thead>
                        <th>Programas</th>
                        <th>Horario</th>
                        <th>Comienza</th>
                        <th>Termina</th>
                        <th>Dirigido por</th>
                    </thead>
                    @foreach($programas as $programa)
                        <tbody>
                            <td><p class="mayus">{{ $programa->nombre }}</p> </td>
                            <td><p class="mayus">{{ $programa->horario }}</p></td>
                            <td><p class="mayus">{{ $programa->comienza }}</p></td>
                            <td><p class="mayus">{{ $programa->termina }}</p></td>
                            <td><p class="mayus">{{ $programa->dirige }}</p></td>
                        </tbody>
                    @endforeach
                </table>
            </div>
        </div>
    </section>

    
    

    <!-- acerca Section -->
    <section id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Acerca de.</h2>
                    <h3 class="section-subheading text-muted">Emisora La Nueva 101.6 MHZ, de Sabanalarga.</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <ul class="timeline">
                        <li>
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="img/about/inicio.jpg" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>Año en que inicio</h4>
                                    <h4 class="subheading">Inicios</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-inverted">
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="img/about/mision.jpg" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4 class="subheading">Misión</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="img/about/vision.jpg" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4 class="subheading">Visión</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-inverted">
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="img/about/actualidad.jpg" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4><?php $arrayMeses = array('Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio',
                                       'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre');
                                         
                                        echo "".$arrayMeses[date('m')-1]." de ".date('Y'); ?></h4>
                                    <h4 class="subheading">Actualidad</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-inverted">
                            <div class="timeline-image">
                                <h4>LA
                                    <br>VERDADERA
                                    <br>RADIO</h4>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section id="team" class="bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Conocenos..</h2>
                    <h3 class="section-subheading text-muted">Emisora La Nueva 101.6 MHZ, de Sabanalarga.</h3>
                </div>
            </div>
            <div class="row"  id="equipo">
                <div class="slider1">
                    <div class="col-sm-4">
                        <div class="team-member">
                            <img src="img/equipo/11.jpg" class="tamano img-responsive img-circle" alt="">
                            <h4>Roman Abad Gutierrez</h4>
                            <p class="text-muted">Director</p>
                            <ul class="list-inline social-buttons">
                                <li><a href="#"><i class="fa fa-twitter"></i></a>
                                </li>
                                <li><a href="#"><i class="fa fa-facebook"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="team-member">
                            <img src="img/equipo/22.jpg" class="tamano img-responsive img-circle" alt="">
                            <h4>Maz Barraza Sanjuan</h4>
                            <p class="text-muted">Locutor</p>
                            <ul class="list-inline social-buttons">
                                <li><a href="#"><i class="fa fa-twitter"></i></a>
                                </li>
                                <li><a href="#"><i class="fa fa-facebook"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="team-member">
                            <img src="img/equipo/33.jpg" class="tamano img-responsive img-circle" alt="">
                            <h4>Carlos Jr Guerrero Gutierrez</h4>
                            <p class="text-muted">Dj Locutor</p>
                            <ul class="list-inline social-buttons">
                                <li><a href="#"><i class="fa fa-twitter"></i></a>
                                </li>
                                <li><a href="#"><i class="fa fa-facebook"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="slider2">
                    <div class="col-sm-4">
                        <div class="team-member">
                            <img src="img/equipo/4.jpg" class="tamano img-responsive img-circle" alt="">
                            <h4>Geison Gutierrez</h4>
                            <p class="text-muted">Locutor</p>
                            <ul class="list-inline social-buttons">
                                <li><a href="#"><i class="fa fa-twitter"></i></a>
                                </li>
                                <li><a href="#"><i class="fa fa-facebook"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="team-member">
                            <img src="img/equipo/5.jpg" class="tamano img-responsive img-circle" alt="">
                            <h4>Armando Rodriguez Gutierrez</h4>
                            <p class="text-muted">Dj Locutor</p>
                            <ul class="list-inline social-buttons">
                                <li><a href="#"><i class="fa fa-twitter"></i></a>
                                </li>
                                <li><a href="#"><i class="fa fa-facebook"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="team-member">
                            <img src="img/equipo/6.jpg" class="tamano img-responsive img-circle" alt="">
                            <h4>Cesar Mendoza Mendoza</h4>
                            <p class="text-muted">Periodista</p>
                            <ul class="list-inline social-buttons">
                                <li><a href="#"><i class="fa fa-twitter"></i></a>
                                </li>
                                <li><a href="#"><i class="fa fa-facebook"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="slider3">
                    <div class="col-sm-4">
                        <div class="team-member">
                            <img src="img/equipo/7.jpg" class="tamano img-responsive img-circle" alt="">
                            <h4>Edgardo Castro Salas</h4>
                            <p class="text-muted">Locutor</p>
                            <ul class="list-inline social-buttons">
                                <li><a href="#"><i class="fa fa-twitter"></i></a>
                                </li>
                                <li><a href="#"><i class="fa fa-facebook"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="team-member">
                            <img src="img/equipo/8.jpg" class="tamano img-responsive img-circle" alt="">
                            <h4>Pedro Marchena Angulo</h4>
                            <p class="text-muted">Locutor</p>
                            <ul class="list-inline social-buttons">
                                <li><a href="#"><i class="fa fa-twitter"></i></a>
                                </li>
                                <li><a href="#"><i class="fa fa-facebook"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="team-member">
                            <img src="img/equipo/9.jpg" class="tamano img-responsive img-circle" alt="">
                            <h4>Diana Pertersen</h4>
                            <p class="text-muted">Locutor</p>
                            <ul class="list-inline social-buttons">
                                <li><a href="#"><i class="fa fa-twitter"></i></a>
                                </li>
                                <li><a href="#"><i class="fa fa-facebook"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <p class="large text-muted">Equipo de trabajo de tu Emisora la Nueva de Sabanalarga la verdadera radio.</p>
                </div>
            </div>
        </div>
                
    </div>
    </section>

   
    
    <!-- Contact Section -->
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Contactos</h2>
                    <h3 class="section-subheading text-muted">Emisora La Nueva 101.6 MHZ, de Sabanalarga.</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="col-md-6">
                        <iframe class="mapa" src="https://www.google.com/maps/d/embed?mid=zGJsu3y9CnWc.kGFOguegzt2c" width="100%" height="400px"></iframe>
                    </div>
                    <div class="col-md-6 .col-md-offset-4">
                        <h6 id="texto">Emisora la Nueva</h6>
                        <p id="texto">Emisora la Nueva 101.6 MHZ de Sabanalarga, Miembro de la Red de Radios Comunitarias de la Costa Atlántica, Somos la Verdadera Radio.</p>

                        <p id="texto"><strong>Direccion:</strong>  Cra 18 # 21 – 73 2do piso, Barrio centro Sabanalarga (Atlantico)</p>
                        <p id="texto"><strong>Telefonos:</strong> 8783134 - 8780418 </p> 
                        <p id="texto"><strong>WhatsApp:</strong> 3016026767</p>
                        <p id="texto"><strong>E-mail:</strong> lanuevastereo@yahoo.es</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <span class="copyright">Copyright &copy; 2015. Design by <span class="janus">Janus IT SAS</span></span>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline social-buttons">
                        <li><a href="#"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <script id="cid0020000102392352913" data-cfasync="false" async src="//st.chatango.com/js/gz/emb.js" style="width: 275px;height: 402px;">{"handle":"la-nueva","arch":"js","styles":{"a":"383838","b":95,"c":"FFFFFF","d":"FFFFFF","f":95,"i":95,"k":"383838","l":"383838","m":"383838","n":"FFFFFF","o":95,"p":"10","q":"383838","r":95,"pos":"br","cv":1,"cvbg":"202020","cvbga":64,"cvw":266,"cvh":37,"ticker":1,"fwtickm":1}}</script>
    <script>
          (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
          })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

          ga('create', 'UA-67887921-1', 'auto');
          ga('send', 'pageview');

    </script>
    <div class="modal fade" id="portfolioModal1"  aria-hidden="true"role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="padding:35px 50px;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4><span class="glyphicon glyphicon-lock"></span> Login</h4>
        </div>
        <div class="modal-body" style="padding:40px 50px;">
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

                        
                            <div class="col-md-6 col-md-offset-4">
                                <input type="submit" class="btn btn-warning" value="L O G I N">
                                                                   
                        </div>
                    </form>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
          <p>No tienes Cuenta? <a href="#">Registrate</a></p>
        </div>
      </div>     
    </div>
  </div> 
  <div class="escucha">
    <a href="javascript:window.open('http://www.ustream.tv/embed/14878799?v=3&amp;wmode=direct','La Nueva 101.6 Mhz, Primerisima!!!','width=600,height=400') "  id="transmision">Escucha la Nueva 101.6 mhz</a>
</div>
@endsection
@section('script')
<script>
    jQuery(window).scroll(function(){
        if(jQuery(this).height() + jQuery(this).scrollTop() == $(document).height()) {
            jQuery('.escucha').fadeOut();
        }else if (jQuery(this).scrollTop() > 1000)
            jQuery('.escucha').fadeIn(500);
        else
            jQuery('.escucha').fadeOut();
    });
</script>
@endsection