<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name') }} | @yield('title')</title>

        <!-- Favicon -->
        <link rel="icon" href="{{ asset('img/brand/favicon.png') }}" type="image/png">
        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
        <!-- Icons -->
        <link rel="stylesheet" href="{{ asset('vendor/nucleo/css/nucleo.css')}}" type="text/css">
        <link rel="stylesheet" href="{{ asset('vendor/@fortawesome/fontawesome-free/css/all.min.css')}}" type="text/css">
        <!-- Argon CSS -->
        <link rel="stylesheet" href="{{ asset('css/argon.css?v=1.2.0" type="text/css')}}">

        <!-- Scripts -->
        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.2.1/dist/alpine.js" defer></script>
    </head>
    <body class="bg-default">
        <!-- Navbar -->
        <nav id="navbar-main" class="navbar navbar-horizontal navbar-transparent navbar-main navbar-expand-lg navbar-light">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="{{ asset('img/brand/white.png') }}">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-collapse"
                    aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="navbar-collapse navbar-custom-collapse collapse" id="navbar-collapse">
                    <div class="navbar-collapse-header">
                        <div class="row">
                            <div class="col-6 collapse-brand">
                                <a href="{{ url('/') }}">
                                    <img src="{{ asset('img/brand/blue.png') }}">
                                </a>
                            </div>
                            <div class="col-6 collapse-close">
                                <button type="button" class="navbar-toggler" data-toggle="collapse"
                                    data-target="#navbar-collapse" aria-controls="navbar-collapse" aria-expanded="false"
                                    aria-label="Toggle navigation">
                                    <span></span>
                                    <span></span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a href="{{ route('login') }}" class="nav-link">
                                <span class="nav-link-inner--text">{{ __('Entrar') }}</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('register') }}" class="nav-link">
                                <span class="nav-link-inner--text">{{ __('Registro') }}</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Main content -->
        <div class="main-content">
            <!-- Header -->
            <div class="header bg-gradient-primary py-7 py-lg-5 pt-lg-9">
                <div class="container">
                    <div class="header-body text-center mb-7">
                        <div class="row justify-content-center">
                            <div class="col-xl-5 col-lg-6 col-md-8 px-5">
                                <h1 class="text-white">
                                    @yield('title','Welcome')
                                </h1>
                                <p class="text-lead text-light">
                                    @yield('subtitle')
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="separator separator-bottom separator-skew zindex-100">
                    <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1"
                        xmlns="http://www.w3.org/2000/svg">
                        <polygon class="fill-default" points="2560 0 2560 100 0 100"></polygon>
                    </svg>
                </div>
            </div>
            <!-- Page content -->
            <div class="font-sans text-gray-900 antialiased">
                {{ $slot }}
            </div>
        </div>
        <!-- Footer -->
        <footer class="py-5" id="footer-main">
            <div class="container">
                <div class="row align-items-center justify-content-xl-between">
                    <div class="col-xl-6">
                        <div class="copyright text-center text-xl-left text-muted">
                            &copy; 2020 <a href="/" class="font-weight-bold ml-1"
                                target="_blank">{{ config('app.name') }}</a>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <ul class="nav nav-footer justify-content-center justify-content-xl-end">
                            <li class="nav-item">
                                <a href="https://www.creative-tim.com" class="nav-link" target="_blank">Template</a>
                            </li>
                            <li class="nav-item">
                                <a href="https://www.creative-tim.com/presentation" class="nav-link" target="_blank">{{ __('Acerca de') }}</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Argon Scripts -->
        <!-- Core -->
        <script src="{{ asset('vendor/jquery/dist/jquery.min.js') }}"></script>
        <script src="{{ asset('vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('vendor/js-cookie/js.cookie.js') }}"></script>
        <script src="{{ asset('vendor/jquery.scrollbar/jquery.scrollbar.min.js') }}"></script>
        <script src="{{ asset('vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js') }}"></script>
        <!-- Argon JS -->
        <script src="{{ asset('js/argon.js?v=1.2.0') }}"></script>
    </body>
    {{-- <body>

    </body> --}}
</html>
