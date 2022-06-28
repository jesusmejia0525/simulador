<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image" href="{{asset('assets/img/logo1.png')}}">
  <title>CrediFast</title>
  <meta name="description" content="">
  <meta name="author" content="">

  <!-- Favicons
    ================================================== -->
  <link rel="shortcut icon" href="{{asset('assets/img/favicon.ico')}}" type="image/x-icon">
  <link rel="apple-touch-icon" href="{{asset('assets/img/apple-touch-icon.png')}}">
  <link rel="apple-touch-icon" sizes="72x72" href="{{asset('assets/img/apple-touch-icon-72x72.png')}}">
  <link rel="apple-touch-icon" sizes="114x114" href="{{asset('assets/img/apple-touch-icon-114x114.png')}}">

  <!-- Bootstrap -->
  <link rel="stylesheet" type="text/css" href="{{asset('assets/css/bootstrap.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('assets/fonts/font-awesome/css/font-awesome.css')}}">

  <!-- Stylesheet
    ================================================== -->

  <link rel="stylesheet" type="text/css" href="{{asset('assets/css/style.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('assets/css/nivo-lightbox/nivo-lightbox.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('assets/css/nivo-lightbox/default.css')}}">
  <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,600,700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Dancing+Script:400,700" rel="stylesheet">


  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
  <!-- Navegacion
    ==========================================-->
  <nav id="menu" class="navbar navbar-default navbar-fixed-top">
    <div class="container">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
        <img id="logo" src="{{asset('assets/img/logo1.png')}}">
        <a1>CrediFast</a1>
        
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav navbar-right">
          <li><a href="#about" class="page-scroll">Acerca De</a></li>
          <li><a href="#restaurant-menu" class="page-scroll">Conocenos</a></li>
          <li><a href="#team" class="page-scroll">Prestamos</a></li>
          <li><a href="#call-reservation" class="page-scroll">Preguntas Frecuentes</a></li>
          <li><a href="#contact" class="page-scroll">Contactanos</a></li>
          @guest
          @if (Route::has('login'))
          <li class="nav-item">
            <a class="nav-link" href="{{ route('login') }}">{{ __('Iniciar Sesion') }}</a>
          </li>
          @endif


          @else

          <li>

            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
              {{ __('Salir Sesion') }}
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
              @csrf
            </form>

          </li>
          @endguest
        </ul>
      </div>

      <!-- /.navbar-collapse -->
    </div>
  </nav>
  <!-- Header -->
  <header id="header">
    <div class="intro">
      <div class="overlay">
        <div class="container">
          <div class="row">
            <div class="intro-text">
              <h1>Simulador de Prestamos</h1>
              <a2>Obtén un Crédito en Efectivo de forma inmediata. Tú decides el plazo que necesitas para pagar en abonos semanales. </a2>
              <br> class="btn btn-custom btn-lg page-scroll">Simula tu Prestamo</a>
              <br><a href="{{ route('FrmAuto') }}" class="btn btn-custom btn-lg page-scroll">Simula tu Prestamo</a> </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
  <!-- About Section -->
  <div id="about">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-md-6 ">
          <div class="about-img"><img id="img-about" src="{{asset('assets/img/about.jpg')}}" class="img-responsive" alt=""></div>
        </div>
        <div class="col-xs-12 col-md-6">
          <div class="about-text">
            <center>
              <h2>Aprovecha al máximo tu casa, auto o nómina y ¡alcanza tus metas!</h2>
            </center>
            <center>
              <hr>
            </center>
            <p>Transforma tu vida y obtén acceso a soluciones financieras competitivas con plazos más largos y pagos más cómodos.</p>
            <h3>¿Qué es un préstamo con garantía?</h3>
            <p>Es un tipo de préstamo en el que utilizas un inmueble, tu auto o tu nómina como garantía de pago. Al estar respaldado obtendrás más dinero a mayores plazos.</p>
            <p> Con Nosotros tendrás:</p>
            <img id="icon" src="{{asset('assets/img/icon_doc.png')}}">
            <a3> Pre-aprobación en 24 horas hábiles.</a3>
            <br><br><img id="icon" src="{{asset('assets/img/icon_rel.png')}}">
            <a3> Plazos flexibles con menos intereses.</a3>
            <br><br><img id="icon" src="{{asset('assets/img/icon_user.png')}}">
            <a3> Asesoría personalizada.</a3>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Restaurant Menu Section -->
  <div id="restaurant-menu">
    <div class="section-title text-center center">
      <div class="overlay">
        <h2>Simular un préstamo con Nosotros es un proceso ágil y transparente</h2>
        <hr>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-6">
          <div class="menu-section">
            <h2 class="menu-section-title">Misión</h2>
            <hr>
            <br>
            <center>
              <p>Nuestra misión
Queremos transformar e impactar la vida de las personas, ayudarles a conquistar sus metas y resolver sus problemas a través de la tecnología y cuidando su salud financiera.</p>
            </center>
          </div>
        </div>
        <div class="col-xs-12 col-sm-6">
          <div class="menu-section">
            <h2 class="menu-section-title">Visión</h2>
            <hr>
            <br>
            <center>
              <p>Ofrecer la mejor experiencia  A través de nuestra tecnología acercandonos a quienes necesitan soluciones financieras para impulsar su negocio, renovar su casa, comprar un auto, liquidar deudas o financiar un proyecto.</p>
            </center>
          </div>
        </div>
      </div>
      <center>
        <div class="col-xs-12 col-sm-6"></div>
      </center>
      <div class="menu-section">
        <h2 class="menu-section-title">¿Quienes somos?</h2>
        <hr>
        <br>
        <center>
          <p>Hola, somos CrediFast,
la plataforma digital de soluciones financieras, simula tu prestamo!</p>
        </center>
      </div>
    </div>
  </div>
  </div>
  <!-- Team Section -->
  <div id="team" class="text-center">
    <div class="overlay">
      <div class="container">
        <div class="col-md-10 col-md-offset-1 section-title">
          <h2>Nuestros Simuladores</h2>
          <hr>
          <p>Explora todas las soluciones que tenemos para ti.</p>
        </div>
        <div id="row">
          <div class="col-md-4 team">
            <div class="thumbnail">
              <div class="team-img"><img src="{{asset('assets/img/team/01.jpg')}}" alt="..."></div>
              <div class="caption">
                <h3>Simulador de Préstamo con garantía de automovil</h3>
                <p>Usa tu auto para obtener mejores tasas y plazos amplios.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 team">
            <div class="thumbnail">
              <div class="team-img"><img src="{{asset('assets/img/team/02.jpg')}}" alt="..."></div>
              <div class="caption">
                <h3>Simulador de Prestamo con Nómina</h3>
                <p>Accede a un financiamiento para hacer realidad tus metas con ayuda de tu nómina.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 team">
            <div class="thumbnail">
              <div class="team-img"><img src="{{asset('assets/img/team/03.jpg')}}" alt="..."></div>
              <div class="caption">
                <h3>Simulador de Prestamo Hipotecario</h3>
                <p>Usa tu casa o departamento para obtener mejores tasas y plazos amplios.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Preguntas Frecuentes -->
  <div id="call-reservation" class="text-center">
    <div class="container">
      <h2><strong>Preguntas Frecuentes</strong></h2>
    </div>
  </div>
  <details>
    <summary>
      <h1>¿Cuál es el monto mínimo que puedo solicitar?</h1>
    </summary>
    <div>
      <p>Puedes solicitar un Crédito en Efectivo a partir de $2,000 pesos.</p>
    </div>
  </details>
  <details>
    <summary>
      <h1>¿Qué documentos necesito para aplicar a un préstamo con garantía hipotecaria?</h1>
    </summary>
    <div>
      <p>Puedes solicitar un prestamo con simples datos como: <br> Nombre y apellido, fecha de nacimiento, número de celular o fijo, email, tipo de trabajo actual, ubicación del inmueble o marca del vehículo en garantía, ingreso mensual, posible uso del préstamos y plazo de pago.</p>
    </div>
  </details>
  <details>
    <summary>
      <h1>Si estoy en buró de crédito ¿puedo aplicar a un préstamo con garantía hipotecaria?</h1>
    </summary>
    <div>
      <p>Sí, estar en buró de crédito no es factor determinante para decidir no otorgarte un préstamo.</p>
    </div>
  </details>
  <details>
    <summary>
      <h1>¿Qué tipo de inmuebles son aceptados?</h1>
    </summary>
    <div>
      <p>Para tu crédito con garantía hipotecaria puedes utilizar:
        --Casa habitación
        --Departamento
        El inmueble debe estar ubicado en CDMX, EDOMEX o Monterrey y deberá tener una vida útil igual o mayor al plazo del crédito solicitado. El inmueble en garantía debe estar escriturado. Tenemos plazos de pago desde 5 hasta 15 años, el valor mínimo de inmuebles que tomamos como garantía es de $500,000 Pesos.</p>
    </div>
  </details>
  <details>
    <summary>
      <h1>¿Qué pasa con mi inmueble en garantía?</h1>
    </summary>
    <div>
      <p>Tu propiedad se queda como garantía hasta que hagas todos los pagos del préstamo. Es importante que sepas que la propiedad nunca deja de ser tuya y puedes seguir disfrutando de ella como quieras, se notifica al Registro Público de la Propiedad que tu inmueble se encuentra en garantía. Esto nos da certeza a todos de que tu propiedad está siendo usada como garantía de un préstamo.</p>
    </div>
  </details>
  <details>
    <summary>
      <h1>¿Puedo vender o transferir el inmueble que usé como garantía?</h1>
    </summary>
    <div>
      <p>Claro que puedes, mientras hagas el pago total del préstamo. Esto puede ser en la misma transacción de compra-venta dejando claro al comprador que primero se debe liquidar el préstamo y el remanente se te pague a ti.</p>
    </div>
    <br>
    <br>
    <br>
  </details>
  <!-- Contact Section -->
  <div id="contact" class="text-center">
    <div class="container">
      <div class="section-title text-center">
        <h2>Contactanos</h2>
        <hr>
        <p>¿Tienes alguna duda?, No dudes en comunicarte con nosotros.</p>
      </div>
      <div class="col-md-10 col-md-offset-1">
        <form name="sentMessage" id="contactForm" novalidate>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <input type="text" id="name" class="form-control" placeholder="Nombre" required="required">
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <input type="email" id="email" class="form-control" placeholder="Correo Electronico" required="required">
                <p class="help-block text-danger"></p>
              </div>
            </div>
          </div>
          <div class="form-group">
            <textarea name="message" id="message" class="form-control" rows="4" placeholder="Mensaje" required></textarea>
            <p class="help-block text-danger"></p>
          </div>
          <div id="success"></div>
          <button type="submit" class="btn btn-custom btn-lg">Enviar Mensaje</button>
        </form>
      </div>
    </div>
  </div>
  <div id="footer">
    <div class="container text-center">
      <div class="col-md-4">
        <h3>Dirección</h3>
        <div class="contact-item">
          <p>889 Xochimilco,</p>
          <p>Ciudad de Mexico, CP. 16020</p>
        </div>
      </div>
      <div class="col-md-4">
        <h3>Horarios</h3>
        <div class="contact-item">
          <p>Horario Matutino: 10:00 AM - 11:00 PM</p>
          <p>Horario Vespertino: 11:00 AM - 02:00 AM</p>
        </div>
      </div>
      <div class="col-md-4">
        <h3>Información de Contacto</h3>
        <div class="contact-item">
          <p>Celular: +52 55 62 40 12 62</p>
          <p>Correo: credifast@company.com</p>
        </div>
      </div>
    </div>
    <div class="container-fluid text-center copyrights">
      <div class="col-md-8 col-md-offset-2">
        <div class="social">
          <ul>
            <li><a href="https://es-la.facebook.com/"><i class="fa fa-facebook"></i></a></li>
            <li><a href="https://twitter.com/?lang=es"><i class="fa fa-twitter"></i></a></li>
            
          </ul>
        </div>
        <p>&copy; 2022 CrediFast. All rights reserved. Designed by UTN-SYSTEM</p>
      </div>
    </div>
  </div>
  <script type="text/javascript" src="{{asset('assets/js/jquery.1.11.1.js')}}"></script>
  <script type="text/javascript" src="{{asset('assets/js/bootstrap1.js')}}"></script>
  <script type="text/javascript" src="{{asset('assets/js/SmoothScroll.js')}}"></script>
  <script type="text/javascript" src="{{asset('assets/js/nivo-lightbox.js')}}"></script>
  <script type="text/javascript" src="{{asset('assets/js/jquery.isotope.js')}}"></script>
  <script type="text/javascript" src="{{asset('assets/js/jqBootstrapValidation.js')}}"></script>
  <script type="text/javascript" src="{{asset('assets/js/contact_me.js')}}"></script>
  <script type="text/javascript" src="{{asset('assets/js/main.js')}}"></script>

</body>

</html>