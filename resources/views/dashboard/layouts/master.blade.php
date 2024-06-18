<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <title>{{ $title ?? 'Dashboard' }} | Jalankuy Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Jalankuy - Cari Kemudahan Liburan Bersama Keluarga Dengan Pemesanan Secara Online"
        name="description" />
    <meta content="Ahmad Shaleh Kurniawan" name="author" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('template_dashboard/images/favicon.ico') }}">

    <!-- Sweet Alert-->
    <link href="{{ asset('template_dashboard/libs/sweetalert2/sweetalert2.min.css') }}" rel="stylesheet" type="text/css" />

    <!-- DataTables -->
    <link href="{{ asset('template_dashboard/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('template_dashboard/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />

    <!-- Responsive datatable examples -->
    <link href="{{ asset('template_dashboard/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />

    <!-- Bootstrap Css -->
    <link href="{{ asset('template_dashboard/css/bootstrap.min.css') }}" id="bootstrap-style" rel="stylesheet"
        type="text/css" />
    <!-- Icons Css -->
    <link href="{{ asset('template_dashboard/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{ asset('template_dashboard/css/app.min.css') }}" id="app-style" rel="stylesheet" type="text/css" />

</head>

<body data-sidebar="dark" data-layout-mode="light">

    <!-- <body data-layout="horizontal" data-topbar="dark"> -->

    <!-- Begin page -->
    <div id="layout-wrapper">


        @include('dashboard.layouts._header')

        @include('dashboard.layouts._sidebar')



        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">

            @yield('content')

            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6">
                            <script>
                                document.write(new Date().getFullYear())
                            </script> © Skote.
                        </div>
                        <div class="col-sm-6">
                            <div class="text-sm-end d-none d-sm-block">
                                Design & Develop by Themesbrand
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->

    <!-- Right bar overlay-->
    <div class="rightbar-overlay"></div>

    <!-- JAVASCRIPT -->
    <!-- JAVASCRIPT -->
    <script src="{{ asset('template_dashboard/libs/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('template_dashboard/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('template_dashboard/libs/metismenu/metisMenu.min.js') }}"></script>
    <script src="{{ asset('template_dashboard/libs/simplebar/simplebar.min.js') }}"></script>
    <script src="{{ asset('template_dashboard/libs/node-waves/waves.min.js') }}"></script>

    <!-- Required datatable js -->
    <script src="{{ asset('template_dashboard/libs/datatables.net/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('template_dashboard/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js') }}"></script>

    <!-- Responsive examples -->
    <script src="{{ asset('template_dashboard/libs/datatables.net-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('template_dashboard/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js') }}"></script>

    <!-- apexcharts -->
    <script src="{{ asset('template_dashboard/libs/apexcharts/apexcharts.min.js') }}"></script>

    <!-- Sweet Alerts js -->
    <script src="{{ asset('template_dashboard/libs/sweetalert2/sweetalert2.min.js') }}"></script>

    <!-- dashboard init -->
    <script src="{{ asset('template_dashboard/js/pages/dashboard.init.js') }}"></script>

    <!-- App js -->
    <script src="{{ asset('template_dashboard/js/app.js') }}"></script>

    <script>
        $(document).ready(function() {
            $('#datatable').DataTable();
        });
    </script>

    @if (session('success'))
        <script>
            Swal.fire("Berhasil!", "{{ session('success') }}", "success");
        </script>
    @endif

    @if (session('error'))
        <script>
            Swal.fire("Gagal!", "{{ session('error') }}", "error");
        </script>
    @endif

    @stack('script')
</body>

</html>
