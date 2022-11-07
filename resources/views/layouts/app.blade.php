<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
  <link rel="icon" type="image" href="{{asset('assets/img/logo1.png')}}">
  <title>CrediFast</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/style.css')}}">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{asset('assets/css/bootstrap.css')}}" rel="stylesheet">
</head>
<body>
    <div id="app" class="intro" >
        <nav style="background-color: rgba(142,182,64,1)" class="navbar navbar-expand-md navbar-light  shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                CrediFast  
                </a>
              
      

                    <!-- Right Side Of Navbar -->
                    <ul class=" navbar-nav ms-auto">
                        <!-- Authentication Links -->
            @guest

          @if (Route::has('login'))
          <a class="navbar-brand" href="{{ route('login') }}">
            Iniciar Sesión
          </a>
          <a class="navbar-brand" href="{{ route('register') }}">
            Registrar
          </a>
          @endif

          @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Cerrar Sesión') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
          
            </div>
        </nav>
        <br>
    <br>
    <br>
    <br>

        <main class="py-1">
            @yield('content')
        </main>
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
               <p><a href="tel:tel:5562401262">Celular: +52 55 62 40 12 62</a></p>
          <p><a href="mailto:credifast@company.com"> Correo:credifast@company.com</a></p>
      </div>
    </div>
  </div>
  <div class="container-fluid text-center copyrights">
    <div class="col-md-8 col-md-offset-2">
      <div class="social">
      <p>&copy; 2022 CrediFast. All rights reserved. Designed by UTN-SYSTEM</p>
    </div>
  </div>
    </div>
</body>
</html>