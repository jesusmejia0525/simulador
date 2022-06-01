<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" type="image" href="{{asset('assets/img/logo1.png')}}"><title>CrediFast</title>
<meta name="description" content="">
<meta name="author" content="">

<!-- Favicons
    ================================================== -->
<link rel="shortcut icon" href="{{asset('assets/img/favicon.ico')}}" type="image/x-icon">
<link rel="apple-touch-icon" href="{{asset('assets/img/apple-touch-icon.png')}}">
<link rel="apple-touch-icon" sizes="72x72" href="{{asset('assets/img/apple-touch-icon-72x72.png')}}">
<link rel="apple-touch-icon" sizes="114x114" href="{{asset('assets/img/apple-touch-icon-114x114.png')}}">

<!-- Bootstrap -->
<link rel="stylesheet" type="text/css"  href="{{asset('assets/css/bootstrap.css')}}">
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
      <img id="logo" src="img/logo1.png"><a1>CrediFast</a1> </div>
    
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="index.html" class="page-scroll">Acerca De</a></li>
        <li><a href="index.html" class="page-scroll">Pasos</a></li>
        <li><a href="index.html" class="page-scroll">Prestamos</a></li>
        <li><a href="index.html" class="page-scroll">Preguntas Frecuentes</a></li>
        <li><a href="index.html" class="page-scroll">Contactanos</a></li>
        <li><a href="iniciosesion.html">Iniciar Sesión</a></li>
      </ul>
    </div>
    <!-- /.navbar-collapse --> 
  </div>
</nav>
<!-- Header -->

<!-- Team Section -->
<div id="sesion" class="text-center">
  <div class="overlay">
    <div class="container">
      <div class="col-md-10 col-md-offset-1 section-title">
        <h2>Inicio de Sesión</h2>
        <hr>
        <p>Explora todas las soluciones que tenemos para ti.</p>
      </div>
    </div>
  </div>
</div>
<!-- Iniciar Sesión -->
<div id="contact" class="text-center">
  <div class="container">
    <div class="section-title text-center">
    </div>
    <div class="col-md-10 col-md-offset-1">
         <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
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
          <li><a href="#"><i class="fa fa-facebook"></i></a></li>
          <li><a href="#"><i class="fa fa-twitter"></i></a></li>
          <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
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
