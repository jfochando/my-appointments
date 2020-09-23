<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
        <meta name="author" content="Creative Tim">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Sistema de Reserva de Citas | {{ config('app.name') }}</title>

        <!-- Favicon -->
        <link rel="icon" href="{{ asset('img/brand/favicon.png') }}" type="image/png">
        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
        <!-- Icons -->
        <link rel="stylesheet" href="{{ asset('vendor/nucleo/css/nucleo.css') }}" type="text/css">
        <link rel="stylesheet" href="{{ asset('vendor/@fortawesome/fontawesome-free/css/all.min.css') }}" type="text/css">
        <!-- Page plugins -->
        <!-- Argon CSS -->
        <link rel="stylesheet" href="{{ asset('css/argon.css?v=1.2.0" type="text/css') }}">

        <!-- Scripts -->
        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.6.0/dist/alpine.js" defer></script>
    </head>
    <body class="font-sans antialiased">
        <!-- Sidenav -->
        @include('includes.panel.menu')
        <!-- Main content -->
        <div class="main-content" id="panel">
            <!-- Topnav -->
            <nav class="navbar navbar-top navbar-expand navbar-dark bg-primary border-bottom">
                <div class="container-fluid">
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <h6 class="h2 text-white d-inline-block mb-0">Icons</h6>
                        <!-- Navbar links -->
                        <ul class="navbar-nav align-items-center  ml-md-auto ">
                            <li class="nav-item d-xl-none">
                                <!-- Sidenav toggler -->
                                <div class="pr-3 sidenav-toggler sidenav-toggler-dark" data-action="sidenav-pin"
                                    data-target="#sidenav-main">
                                    <div class="sidenav-toggler-inner">
                                        <i class="sidenav-toggler-line"></i>
                                        <i class="sidenav-toggler-line"></i>
                                        <i class="sidenav-toggler-line"></i>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item d-sm-none">
                                <a class="nav-link" href="#" data-action="search-show" data-target="#navbar-search-main">
                                    <i class="ni ni-zoom-split-in"></i>
                                </a>
                            </li>
                        </ul>
                        <!-- Search form -->
                        <form class="navbar-search navbar-search-light form-inline mr-sm-3" id="navbar-search-main">
                            <div class="form-group mb-0">
                                <div class="input-group input-group-alternative input-group-merge">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-search"></i></span>
                                    </div>
                                    <input class="form-control" placeholder="Search" type="text">
                                </div>
                            </div>
                            <button type="button" class="close" data-action="search-close" data-target="#navbar-search-main" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </form>
                        <ul class="navbar-nav align-items-center  ml-auto ml-md-0 ">
                            <li class="nav-item dropdown">
                                <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    <div class="media align-items-center">
                                        <span class="avatar avatar-sm rounded-circle">
                                            <img alt="Image placeholder" src="{{ asset('img/theme/team-4.jpg') }}">
                                        </span>
                                        <div class="media-body  ml-2  d-none d-lg-block">
                                            <span class="mb-0 text-sm  font-weight-bold">{{ auth()->user()->name }}</span>
                                        </div>
                                    </div>
                                </a>
                                <div class="dropdown-menu  dropdown-menu-right ">
                                    <div class="dropdown-header noti-title">
                                        <h6 class="text-overflow m-0">{{ __('Bienvenido!') }}</h6>
                                    </div>
                                    <a href="#" class="dropdown-item">
                                        <i class="ni ni-single-02"></i>
                                        <span>{{ __('Mi Perfil') }}</span>
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        <i class="ni ni-settings-gear-65"></i>
                                        <span>{{ __('Configuración') }}</span>
                                    </a>
                                    <a href="#!" class="dropdown-item">
                                        <i class="ni ni-calendar-grid-58"></i>
                                        <span>{{ __('Mis Citas') }}</span>
                                    </a>
                                    <a href="#!" class="dropdown-item">
                                        <i class="ni ni-support-16"></i>
                                        <span>{{ __('Ayuda') }}</span>
                                    </a>
                                    <div class="dropdown-divider"></div>
                                    <a href="{{ route('logout') }}" class="dropdown-item" onclick="event.preventDefault();document.getElementById('formLogout').submit();">
                                        <i class="ni ni-button-power"></i>
                                        <span>{{ __('Cerrar Sesión') }}</span>
                                    </a>
                                    <form action="{{ route('logout') }}" method="post" style="display: none" id="formLogout">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- Header -->
            <!-- Header -->
            <div class="header bg-primary pb-6">
                <div class="container-fluid">
                    <div class="header-body">
                        <div class="row align-items-center py-4">
                            <div class="col-lg-6 col-7">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Page content -->
            <div class="container-fluid mt--6">
                {{ $slot }}
                <!-- Footer -->
                @include('includes.panel.footer')
            </div>
        </div>
        <!-- Argon Scripts -->
        <!-- Core -->
        <script src="{{ asset('vendor/jquery/dist/jquery.min.js') }}"></script>
        <script src="{{ asset('vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('vendor/js-cookie/js.cookie.js') }}"></script>
        <script src="{{ asset('vendor/jquery.scrollbar/jquery.scrollbar.min.js') }}"></script>
        <script src="{{ asset('vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js') }}"></script>
        <!-- Optional JS -->
        <script src="{{ asset('vendor/chart.js/dist/Chart.min.js') }}"></script>
        <script src="{{ asset('vendor/chart.js/dist/Chart.extension.js') }}"></script>
        <!-- Argon JS -->
        <script src="{{ asset('js/argon.js?v=1.2.0') }}"></script>
    </body>
</html>
{{-- <main>
    {{ $slot }}
</main> --}}
