<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <title>{{ $title }} | Jalankuy - Cari Kemudahan Liburan Bersama Keluarga Dengan Pemesanan Secara Online</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Jalankuy - Cari Kemudahan Liburan Bersama Keluarga Dengan Pemesanan Secara Online" name="description" />
    <meta content="Ahmad Shaleh Kurniawan" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('template_dashboard/images/favicon.ico') }}">

    <!-- Bootstrap Css -->
    <link href="{{ asset('template_dashboard/css/bootstrap.min.css') }}" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{ asset('template_dashboard/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{ asset('template_dashboard/css/app.min.css') }}" id="app-style" rel="stylesheet" type="text/css" />

</head>

<body>
    @yield('content')
    <!-- end account-pages -->

    <!-- JAVASCRIPT -->
    <script src="{{ asset('template_dashboard/libs/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('template_dashboard/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('template_dashboard/libs/metismenu/metisMenu.min.js') }}"></script>
    <script src="{{ asset('template_dashboard/libs/simplebar/simplebar.min.js') }}"></script>
    <script src="{{ asset('template_dashboard/libs/node-waves/waves.min.js') }}"></script>

    <!-- App js -->
    <script src="{{ asset('template_dashboard/js/app.js') }}"></script>
</body>

</html>
