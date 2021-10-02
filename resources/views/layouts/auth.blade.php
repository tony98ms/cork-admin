<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>Cork Admin - Iniciar Sesión</title>
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Quicksand:400,500,600,700&display=swap" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/admin.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/auth.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/plugins.css') }}" rel="stylesheet" type="text/css" />
    {{-- <link href="{{ asset('assets/css/plugins.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/structure.css') }}" rel="stylesheet" type="text/css" class="structure" /> --}}
    {{-- <link href="{{ asset('assets/css/authentication/form-1.css') }}" rel="stylesheet" type="text/css" /> --}}
    <!-- END GLOBAL MANDATORY STYLES -->
    {{-- <link rel="stylesheet" type="text/css" href="assets/css/forms/theme-checkbox-radio.css">
    <link rel="stylesheet" type="text/css" href="assets/css/forms/switches.css"> --}}
</head>

<body class="form">
    @yield('content')
    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
    <!-- END GLOBAL MANDATORY SCRIPTS -->
    <script src="{{ asset('js/authentication/form-1.js') }}"></script>

</body>

</html>
