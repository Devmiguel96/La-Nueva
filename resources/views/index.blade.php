@extends('nav')

@section('content')

    <!-- Noticias Section -->
    
    <section id="portfolio" class="bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Noticias</h2>
                    {!! Form::open(['url'=>'/noticias/buscarnoticias','method'=>'GET','class'=>'navbar-form','role'=>'search']) !!}
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
                            {!! Form::close() !!}
                    
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
                    <h2 class="section-heading">Programas.</h2>
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
                    <h2 class="section-heading">Acerca..</h2>
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
                                    <h4>2009-2011</h4>
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
                                    <h4>March 2011</h4>
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
                                    <h4>December 2012</h4>
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
            <div class="row" id="equipo">
                <div class="slider1">
                    <div class="col-sm-4">
                        <div class="team-member">
                            <img src="img/equipo/1.jpg" class="img-responsive img-circle" alt="">
                            <h4>Kay Garland</h4>
                            <p class="text-muted">Lead Designer</p>
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
                            <img src="img/equipo/2.jpg" class="img-responsive img-circle" alt="">
                            <h4>Larry Parker</h4>
                            <p class="text-muted">Lead Marketer</p>
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
                            <img src="img/equipo/3.jpg" class="img-responsive img-circle" alt="">
                            <h4>Diana Pertersen</h4>
                            <p class="text-muted">Lead Developer</p>
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
                            <img src="img/equipo/1.jpg" class="img-responsive img-circle" alt="">
                            <h4>Kay Garland</h4>
                            <p class="text-muted">Lead Designer</p>
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
                            <img src="img/equipo/2.jpg" class="img-responsive img-circle" alt="">
                            <h4>Larry Parker</h4>
                            <p class="text-muted">Lead Marketer</p>
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
                            <img src="img/equipo/3.jpg" class="img-responsive img-circle" alt="">
                            <h4>Diana Pertersen</h4>
                            <p class="text-muted">Lead Developer</p>
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
                            <img src="img/equipo/1.jpg" class="img-responsive img-circle" alt="">
                            <h4>Kay Garland</h4>
                            <p class="text-muted">Lead Designer</p>
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
                            <img src="img/equipo/2.jpg" class="img-responsive img-circle" alt="">
                            <h4>Larry Parker</h4>
                            <p class="text-muted">Lead Marketer</p>
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
                            <img src="img/equipo/3.jpg" class="img-responsive img-circle" alt="">
                            <h4>Diana Pertersen</h4>
                            <p class="text-muted">Lead Developer</p>
                            <ul class="list-inline social-buttons">
                                <li><a href="#"><i class="fa fa-twitter"></i></a>
                                </li>
                                <li><a href="#"><i class="fa fa-facebook"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <p class="large text-muted">Equipo de trabajo de tu Emisora la Nueva de Sabanalarga la verdadera radio.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Clients Aside -->
    <aside class="clients">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <a href="#">
                        <img src="img/logos/envato.jpg" class="img-responsive img-centered" alt="">
                    </a>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="#">
                        <img src="img/logos/designmodo.jpg" class="img-responsive img-centered" alt="">
                    </a>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="#">
                        <img src="img/logos/themeforest.jpg" class="img-responsive img-centered" alt="">
                    </a>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="#">
                        <img src="img/logos/creative-market.jpg" class="img-responsive img-centered" alt="">
                    </a>
                </div>
            </div>
        </div>
    </aside>
    
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

                        <p id="texto"><strong>Direccion:</strong>  Cra 19 #21 – 45 2do piso, Barrio centro Sabanalarga (Atlantico)</p>
                        <p id="texto"><strong>Telefonos:</strong> 8783134-8780418  Movil:3016026767</p>
                        <p id="texto"><strong>E-mail:</strong> sistemgill@hotmail.com</p>
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
                <div class="col-md-4">
                    <ul class="list-inline quicklinks">
                        <li><a href="#">Privacy Policy</a>
                        </li>
                        <li><a href="#">Terms of Use</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <script id="cid0020000102392352913" data-cfasync="false" async src="//st.chatango.com/js/gz/emb.js" style="width: 275px;height: 402px;">{"handle":"la-nueva","arch":"js","styles":{"a":"383838","b":95,"c":"FFFFFF","d":"FFFFFF","f":95,"i":95,"k":"383838","l":"383838","m":"383838","n":"FFFFFF","o":95,"p":"10","q":"383838","r":95,"pos":"br","cv":1,"cvbg":"202020","cvbga":64,"cvw":266,"cvh":37,"ticker":1,"fwtickm":1}}</script>
@endsection