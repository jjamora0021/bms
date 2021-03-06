<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>BMS</title>

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('assets/img/brand/favicon.png') }}" type="image/png">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">

    <!-- Icons -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/nucleo/css/nucleo.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/vendor/@fortawesome/fontawesome-free/css/all.min.css') }}" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/vendor/fullcalendar/dist/fullcalendar.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/sweetalert2/dist/sweetalert2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap/bootstrap-select.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap/fileinput.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap/dataTables.bootstrap4.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap/responsive.bootstrap4.min.css') }}" type="text/css">

    <!-- Argon CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/argon.css') }}" type="text/css">

    @yield('page-css')
</head>
<body>
    <!-- Sidenav -->
    @include('includes.sidebar')
    <main class="main-content" id="panel">
        <!-- Navbar -->
        @include('includes.navbar')
        @yield('content')
    </main>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>

    <!-- Core -->
    <script src="{{ asset('assets/js/components/vendor/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/components/vendor/moment.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/fullcalendar/dist/fullcalendar.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/sweetalert2/dist/sweetalert2.min.js') }}"></script>
    <script src="{{ asset('assets/js/components/vendor/piexif.min.js') }}"></script>
    <script src="{{ asset('assets/js/components/vendor/sortable.min.js') }}"></script>
    <script src="{{ asset('assets/js/components/vendor/fileinput.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/js-cookie/js.cookie.js') }}"></script>
    <script src="{{ asset('assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js') }}"></script>
    <script src="{{ asset('assets/js/components/vendor/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/js/components/vendor/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets/js/components/vendor/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('assets/js/components/vendor/responsive.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/dropzone/dist/min/dropzone.min.js') }}"></script>
    <script src="{{ asset('assets/js/components/vendor/theme.min.js') }}"></script>
    <script src="{{ asset('assets/js/components/vendor/bootstrap-select.min.js') }}"></script>

    <!-- Argon JS -->
    <script src="{{ asset('assets/js/argon.js') }}"></script>

    <!-- Custom JS -->
    <script type="text/javascript" src="{{ asset('js/components/general-use.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/components/datatable-custom.js') }}"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            generalFunctions.onLoad();
        });
    </script>
    @yield('page-js')
</body>
</html>
