<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>TonyStore - POS</title>
    <link rel="icon" type="image/x-icon" href="img/favicon.ico" />
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sansita&display=swap" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/admin.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/fonts.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/custom.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/plugins.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/elements/miscellaneous.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/elements/breadcrumb.css') }}" rel="stylesheet" type="text/css" />
    @livewireStyles
    <link href="https://cdn.jsdelivr.net/npm/izitoast@1.4.0/dist/css/iziToast.min.css" rel="stylesheet"
        type="text/css" />
    @yield('css')

    <style>
        body {
            font-family: 'Sansita', sans-serif;
        }

        .navbar .navbar-item.navbar-dropdown {
            margin-left: auto;
        }

        .layout-px-spacing {
            min-height: calc(100vh - 145px) !important;
        }

    </style>

    <!-- END PAGE LEVEL PLUGINS/CUSTOM STYLES -->

</head>

<body class="sidebar-noneoverflow starterkit">

    <!--  BEGIN NAVBAR  -->
    <div class="header-container fixed-top">
        <header class="header navbar navbar-expand-sm">
            <ul class="navbar-item flex-row">
                <li class="nav-item theme-logo">
                    {{-- <a href="index.html">
                        <img src="{{ asset('img/favicon.png') }}" class="navbar-logo" alt="logo">
                    </a> --}}
                    CORK-ADMIN
                </li>
            </ul>
            <a href="javascript:void(0);" class="sidebarCollapse" data-placement="bottom"><i data-feather="menu"></i></a>
            <ul class="navbar-item flex-row navbar-dropdown">

                <li class="nav-item dropdown user-profile-dropdown  order-lg-0 order-1">
                    <a href="javascript:void(0);" class="nav-link dropdown-toggle user" id="userProfileDropdown"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        @if (Auth::user()->avatar)
                            <img src="{{ Auth::user()->avatar }}" class="admin-profile" alt="avatar">
                        @else
                            <img alt="image" class="admin-profile "
                                src="{{ Avatar::create(Auth::user()->names)->setChars(2) }}">
                        @endif
                    </a>
                    <div class="dropdown-menu position-absolute animated fadeInUp"
                        aria-labelledby="userProfileDropdown">
                        <div class="user-profile-section">
                            <div class="media mx-auto">
                                {{-- @if (Auth::user()->avatar)
                                    <img src="{{ Auth::user()->avatar }}" class="img-fluid mr-2" alt="avatar">
                                @else
                                    <img alt="image" src="{{ Avatar::create(Auth::user()->names)->setChars(2) }}">
                                @endif --}}
                                <div class="media-body">
                                    <h5> {{ Auth::user()->names }}</h5>
                                    <p class="text-capitalize">{{ getRole() }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="dropdown-item">
                            <a href="{{ route('admin.perfil.me') }}">
                                <i data-feather="user"></i> <span>Mi Perfil</span>
                            </a>
                        </div>
                        <div class="dropdown-item">
                            <a href="{{ route('logout') }}"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                <i data-feather="log-out"></i> <span>Cerrar Sesión</span>
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </div>
                </li>
            </ul>
        </header>
    </div>
    <!--  END NAVBAR  -->
    <!--  BEGIN MAIN CONTAINER  -->
    <div class="main-container" id="container">
        <div class="overlay"></div>
        <div class="cs-overlay"></div>
        <div class="search-overlay"></div>
        @include('layouts.partials.sidebar')
        <!--  BEGIN CONTENT AREA  -->
        <div id="content" class="main-content">
            <div class="layout-px-spacing layout-top-spacing">
                <div class="page-header2 ">
                    <nav class="breadcrumb-four" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li><a href="{{ route('admin.index') }}">
                                    <i class="fas fa-home"></i> Admin
                                </a></li>
                            @yield('breadcrumb')
                        </ol>
                    </nav>
                </div>
                @yield('content')
            </div>
            <div class="footer-wrapper">
                <div class="footer-section f-section-1">
                    <p>Copyright © 2021 <a target="_blank" href="mailto:thony918@outlook.com">TonyStore</a>,
                        Todos
                        los derrechos reservados.</p>
                </div>
                <div class="footer-section f-section-2">
                    <p>Version 1.0 <i data-feather="heart"></i></p>
                </div>
            </div>
        </div>
        <!--  END CONTENT AREA  -->

    </div>
    <!-- END MAIN CONTAINER -->

    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    @livewireScripts
    <script src="https://cdn.jsdelivr.net/npm/izitoast@1.4.0/dist/js/iziToast.min.js">
    </script>
    <x-livewire-notification::toast />
    <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/admin.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/plugins.min.js') }}"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script>
        $(document).ready(function() {
            App.init();
        });
        feather.replace();
        @if (Session::has('msg'))
            console.log(@json(Session::get('msg')))
            iziToast.error({
            title: 'TonyStore',
            message: '{{ Session::get('msg') }}',
            position: 'topRight'
            });
        @endif
    </script>
    @yield('js')
    <x-permissions::scripts />
</body>

</html>
