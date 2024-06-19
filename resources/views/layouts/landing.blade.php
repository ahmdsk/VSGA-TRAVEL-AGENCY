<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <title>{{ $title ?? 'Jalankuy' }} - Cari Kemudahan Liburan Bersama Keluarga Dengan Pemesanan Secara Online</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Arizonia&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Sweet Alert-->
    <link href="{{ asset('template_dashboard/libs/sweetalert2/sweetalert2.min.css') }}" rel="stylesheet"
        type="text/css" />

    <link rel="stylesheet" href="{{ asset('template/css/animate.css') }}">

    <link rel="stylesheet" href="{{ asset('template/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('template/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('template/css/magnific-popup.css') }}">

    <link rel="stylesheet" href="{{ asset('template/css/bootstrap-datepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('template/css/jquery.timepicker.css') }}">


    <link rel="stylesheet" href="{{ asset('template/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('template/css/style.css') }}">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container">
            <a class="navbar-brand" href="{{ route('landing-page.index') }}">Jalankuy<span>Travel Agency</span></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
                aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="oi oi-menu"></span> Menu
            </button>

            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav ml-auto align-items-xl-center">
                    <li class="nav-item active"><a href="{{ route('landing-page.index') }}" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item"><a href="{{ route('landing-page.index') }}#about" class="nav-link">Tentang</a>
                    </li>
                    <li class="nav-item"><a href="{{ route('landing-page.index') }}#destination"
                            class="nav-link">Destinasi</a></li>
                    <li class="nav-item"><a href="{{ route('landing-page.index') }}#contact" class="nav-link">Hubungi
                            Kami</a></li>
                    @auth
                        <li class="nav-item">
                            <div class="dropdown">
                                <button class="btn btn-md btn-primary dropdown-toggle" type="button" data-toggle="dropdown"
                                    aria-expanded="false">
                                    {{ auth()->user()->name }}
                                </button>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="{{ route('booking.history') }}">Riwayat Pemesanan</a>
                                    <form action="{{ route('logout') }}" method="POST">
                                        @csrf
                                        <button type="submit" class="dropdown-item">Keluar</button>
                                    </form>
                                </div>
                            </div>
                        </li>
                    @else
                        <li class="nav-item"><a href="{{ route('login') }}" class="btn btn-md btn-primary">Masuk</a></li>
                    @endauth
                </ul>
            </div>
        </div>
    </nav>
    <!-- END nav -->

    @yield('content')

    <footer class="ftco-footer bg-bottom ftco-no-pt" id="contact"
        style="background-image: url('{{ asset('template/images/bg_3.jpg') }}');">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md pt-5">
                    <div class="ftco-footer-widget pt-md-5 mb-4">
                        <h2 class="ftco-heading-2">Tentang</h2>
                        <p>Jauh sekali, di balik kata pegunungan, jauh dari negeri Vokalia dan Konsonantia, hiduplah
                            teks-teks buta.</p>
                        <ul class="ftco-footer-social list-unstyled float-md-left float-lft">
                            <li class="ftco-animate"><a href="#"><span class="fa fa-twitter"></span></a></li>
                            <li class="ftco-animate"><a href="#"><span class="fa fa-facebook"></span></a></li>
                            <li class="ftco-animate"><a href="#"><span class="fa fa-instagram"></span></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md pt-5 border-left">
                    <div class="ftco-footer-widget pt-md-5 mb-4 ml-md-5">
                        <h2 class="ftco-heading-2">Informasi</h2>
                        <ul class="list-unstyled">
                            <li><a href="#" class="py-2 d-block">Pertanyaan Daring</a></li>
                            <li><a href="#" class="py-2 d-block">Pertanyaan Umum</a></li>
                            <li><a href="#" class="py-2 d-block">Ketentuan Pemesanan</a></li>
                            <li><a href="#" class="py-2 d-block">Privasi dan Kebijakan</a></li>
                            <li><a href="#" class="py-2 d-block">Kebijakan pengembalian</a></li>
                            <li><a href="#" class="py-2 d-block">Hubungi Kami</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md pt-5 border-left">
                    <div class="ftco-footer-widget pt-md-5 mb-4">
                        <h2 class="ftco-heading-2">Pengalaman</h2>
                        <ul class="list-unstyled">
                            <li><a href="#" class="py-2 d-block">Petualangan</a></li>
                            <li><a href="#" class="py-2 d-block">Hotel dan Restoran</a></li>
                            <li><a href="#" class="py-2 d-block">Pantai</a></li>
                            <li><a href="#" class="py-2 d-block">Alam</a></li>
                            <li><a href="#" class="py-2 d-block">Berkemah</a></li>
                            <li><a href="#" class="py-2 d-block">Pesta</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md pt-5 border-left">
                    <div class="ftco-footer-widget pt-md-5 mb-4">
                        <h2 class="ftco-heading-2">Punya pertanyaan?</h2>
                        <div class="block-23 mb-3">
                            <ul>
                                <li><span class="icon fa fa-map-marker"></span><span class="text">203 Fake St.
                                        Mountain View, San Francisco, California, USA</span></li>
                                <li><a href="#"><span class="icon fa fa-phone"></span><span class="text">+2
                                            392 3929 210</span></a></li>
                                <li><a href="#"><span class="icon fa fa-paper-plane"></span><span
                                            class="text">info@yourdomain.com</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 text-center">

                    <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;
                        <script>
                            document.write(new Date().getFullYear());
                        </script> All rights reserved
                        {{-- | This template is made with  --}}
                        {{-- <i
                            class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com"
                            target="_blank">Colorlib</a> --}}
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </p>
                </div>
            </div>
        </div>
    </footer>

    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4"
                stroke="#eeeeee" />
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4"
                stroke-miterlimit="10" stroke="#F96D00" />
        </svg>
    </div>

    <!-- Sweet Alerts js -->
    <script src="{{ asset('template_dashboard/libs/sweetalert2/sweetalert2.min.js') }}"></script>

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

    <script src="{{ asset('template/js/jquery.min.js') }}"></script>
    <script src="{{ asset('template/js/jquery-migrate-3.0.1.min.js') }}"></script>
    <script src="{{ asset('template/js/popper.min.js') }}"></script>
    <script src="{{ asset('template/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('template/js/jquery.easing.1.3.js') }}"></script>
    <script src="{{ asset('template/js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('template/js/jquery.stellar.min.js') }}"></script>
    <script src="{{ asset('template/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('template/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('template/js/jquery.animateNumber.min.js') }}"></script>
    <script src="{{ asset('template/js/bootstrap-datepicker.js') }}"></script>
    <script src="{{ asset('template/js/scrollax.min.js') }}"></script>
    <script src="{{ asset('template/js/main.js') }}"></script>

    <script>
        $(document).ready(function() {
            // read url_video.json
            $.getJSON("{{ asset('json/url_video.json') }}", function(data) {
                // set video url
                $('#video-hero-section').attr('href', data.url);
            });
        })
    </script>

    @stack('script')

</body>

</html>
