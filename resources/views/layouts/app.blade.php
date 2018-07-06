<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>




    <!-- Styles -->
    <link href="{{ asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">
    <link href="{{ asset('fullcalendar/css/fullcalendar.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <!-- Scripts -->
    <script src="{{ asset('jquery/jquery.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>

    <script src="{{ asset('fullcalendar/js/moment.min.js') }}"></script>
    <script src="{{ asset('fullcalendar/js/fullcalendar.js') }}"></script>
    <script src="{{ asset('fullcalendar/js/es.js') }}"></script>
    


</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-light">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'SAEM') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    @auth        
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="mantenimiento" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  Administración
                                </a>
                                <div class="dropdown-menu" aria-labelledby="mantenimiento">
                                  <a class="dropdown-item" href="{{ route('usuarios.index') }}">Usuarios</a>
                                </div>
                          </li>
                          <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="expedientes" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  Control de Expedientes
                                </a>
                                <div class="dropdown-menu" aria-labelledby="expedientes">
                                  <a class="dropdown-item" href="{{ route('pacientes.index') }}">Pacientes</a>
                                  <a class="dropdown-item" href="{{ route('historiales.pacientes') }}">Historiales Clinicos</a>
                                  <a class="dropdown-item" href="#">Consulta Medica</a>
                                </div>
                          </li>
                          <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="citas" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  Citas
                                </a>
                                <div class="dropdown-menu" aria-labelledby="citas">
                                  <a class="dropdown-item" href="{{ route('citas.agenda') }}">Asignar Citas</a>
                                  <a class="dropdown-item" href="#">Recodatorio de citas</a>
                                </div>
                          </li>
                          <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="reportes" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  Reportes
                                </a>
                                <div class="dropdown-menu" aria-labelledby="reportes">
                                  <a class="dropdown-item" href="#">Reporte de seguimiento</a>
                                  <a class="dropdown-item" href="#">Reporte de historia clínica</a>
                                  <a class="dropdown-item" href="#">Reporte de test postural</a>
                                  <a class="dropdown-item" href="#">Reporte de valoración gonométrica</a>
                                  <a class="dropdown-item" href="#">Reporte de valoracón manual muscular</a>
                                  <a class="dropdown-item" href="#">Reporte de antropometria</a>
                                </div>
                          </li>
                        </ul>
                    @endauth

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Iniciar Sesión') }}</a>
                            </li>
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Cerrar Sesión') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
             @yield('content')
        </main>

        @yield('js')

        @include('sweet::alert')
    </div>
</body>
</html>
