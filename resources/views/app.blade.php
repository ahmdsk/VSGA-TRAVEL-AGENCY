<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <title>Jalankuy - Cari Kemudahan Liburan Bersama Keluarga Dengan Pemesanan Secara Online</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Arizonia&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Sweet Alert-->
    <link href="{{ asset('template_dashboard/libs/sweetalert2/sweetalert2.min.css') }}" rel="stylesheet" type="text/css" />

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
                                    <a class="dropdown-item" href="{{ route('dashboard') }}">Dashboard</a>
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

    <div class="hero-wrap js-fullheight" style="background-image: url('{{ asset('template/images/bg_5.jpg') }}');">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-center" data-scrollax-parent="true">
                <div class="col-md-7 ftco-animate">
                    <span class="subheading">Selamat datang di Jalankuy</span>
                    <h1 class="mb-4">Temukan Tempat Favorit Anda bersama Kami</h1>
                    <p class="caps">Bepergian ke sudut mana pun di dunia, tanpa berputar-putar</p>
                </div>
                <a href="#" id="video-hero-section"
                    class="icon-video popup-vimeo d-flex align-items-center justify-content-center mb-4">
                    <span class="fa fa-play"></span>
                </a>
            </div>
        </div>
    </div>

    <section class="ftco-section ftco-no-pb ftco-no-pt">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="ftco-search d-flex justify-content-center">
                        <div class="row">
                            <div class="col-md-12 nav-link-wrap">
                                <div class="nav nav-pills text-center" id="v-pills-tab" role="tablist"
                                    aria-orientation="vertical">
                                    <a class="nav-link active mr-md-1" id="v-pills-1-tab" data-toggle="pill"
                                        href="#v-pills-1" role="tab" aria-controls="v-pills-1"
                                        aria-selected="true">Cari Destinasi</a>

                                    {{-- <a class="nav-link" id="v-pills-2-tab" data-toggle="pill" href="#v-pills-2"
                                        role="tab" aria-controls="v-pills-2" aria-selected="false">Hotel</a> --}}

                                </div>
                            </div>
                            <div class="col-md-12 tab-wrap">

                                <div class="tab-content" id="v-pills-tabContent">

                                    <div class="tab-pane fade show active" id="v-pills-1" role="tabpanel"
                                        aria-labelledby="v-pills-nextgen-tab">
                                        <form action="#" class="search-property-1">
                                            <div class="row no-gutters">
                                                <div class="col-md d-flex">
                                                    <div class="form-group p-4 border-0">
                                                        <label for="#">Tujuan</label>
                                                        <div class="form-field">
                                                            <div class="icon"><span class="fa fa-search"></span>
                                                            </div>
                                                            <input type="text" class="form-control"
                                                                placeholder="Cari tujuan">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md d-flex">
                                                    <div class="form-group p-4">
                                                        <label for="#">Tanggal Check-in</label>
                                                        <div class="form-field">
                                                            <div class="icon"><span class="fa fa-calendar"></span>
                                                            </div>
                                                            <input type="text" class="form-control checkin_date"
                                                                placeholder="Tanggal Check In">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md d-flex">
                                                    <div class="form-group p-4">
                                                        <label for="#">Tanggal Check-out</label>
                                                        <div class="form-field">
                                                            <div class="icon"><span class="fa fa-calendar"></span>
                                                            </div>
                                                            <input type="text" class="form-control checkout_date"
                                                                placeholder="Tanggal Check Out">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md d-flex">
                                                    <div class="form-group p-4">
                                                        <label for="#">Maks. Harga</label>
                                                        <div class="form-field">
                                                            <div class="select-wrap">
                                                                <div class="icon"><span
                                                                        class="fa fa-chevron-down"></span></div>
                                                                <select name="" id="tour-price"
                                                                    class="form-control">
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md d-flex">
                                                    <div class="form-group d-flex w-100 border-0">
                                                        <div class="form-field w-100 align-items-center d-flex">
                                                            <input type="submit" value="Search"
                                                                class="align-self-stretch form-control btn btn-primary">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>

                                    {{-- <div class="tab-pane fade" id="v-pills-2" role="tabpanel"
                                        aria-labelledby="v-pills-performance-tab">
                                        <form action="#" class="search-property-1">
                                            <div class="row no-gutters">
                                                <div class="col-md d-flex">
                                                    <div class="form-group p-4 border-0">
                                                        <label for="#">Tujuan</label>
                                                        <div class="form-field">
                                                            <div class="icon"><span class="fa fa-search"></span>
                                                            </div>
                                                            <input type="text" class="form-control"
                                                                placeholder="Cari tujuan">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md d-flex">
                                                    <div class="form-group p-4">
                                                        <label for="#">Tanggal Check-in</label>
                                                        <div class="form-field">
                                                            <div class="icon"><span class="fa fa-calendar"></span>
                                                            </div>
                                                            <input type="text" class="form-control checkin_date"
                                                                placeholder="Tanggal Check In">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md d-flex">
                                                    <div class="form-group p-4">
                                                        <label for="#">Tanggal Check-out</label>
                                                        <div class="form-field">
                                                            <div class="icon"><span class="fa fa-calendar"></span>
                                                            </div>
                                                            <input type="text" class="form-control checkout_date"
                                                                placeholder="CTanggal heck Out">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md d-flex">
                                                    <div class="form-group p-4">
                                                        <label for="#">Maks. Harga</label>
                                                        <div class="form-field">
                                                            <div class="select-wrap">
                                                                <div class="icon"><span
                                                                        class="fa fa-chevron-down"></span></div>
                                                                <select name="" id="hotel-price"
                                                                    class="form-control">
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md d-flex">
                                                    <div class="form-group d-flex w-100 border-0">
                                                        <div class="form-field w-100 align-items-center d-flex">
                                                            <input type="submit" value="Search"
                                                                class="align-self-stretch form-control btn btn-primary">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>

    <section class="ftco-section services-section" id="about">
        <div class="container">
            <div class="row d-flex">
                <div class="col-md-6 order-md-last heading-section pl-md-5 ftco-animate d-flex align-items-center">
                    <div class="w-100">
                        <span class="subheading">Selamat datang di Jalankuy</span>
                        <h2 class="mb-4">Saatnya memulai petualangan Anda</h2>
                        <p>Sebuah sungai kecil bernama Duden mengalir di dekat tempat mereka dan memasok regelialia yang
                            diperlukan. Ini adalah negara surgawi, di mana bagian-bagian kalimat yang terpanggang
                            terbang ke mulut Anda.</p>
                        <p>Jauh sekali, di balik kata pegunungan, jauh dari negeri Vokalia dan Konsonantia, hiduplah
                            teks-teks buta. Terpisah, mereka tinggal di Bookmarksgrove tepat di pantai Semantics, lautan
                            bahasa yang luas. Sebuah sungai kecil bernama Duden mengalir di dekat tempat mereka dan
                            memasok regelialia yang diperlukan.</p>
                        <p><a href="#" class="btn btn-primary py-3 px-4">Cari Destinasi</a></p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-12 col-lg-6 d-flex align-self-stretch ftco-animate">
                            <div class="services services-1 color-1 d-block img"
                                style="background-image: url('{{ asset('template/images/services-1.jpg') }}');">
                                <div class="icon d-flex align-items-center justify-content-center"><span
                                        class="flaticon-paragliding"></span></div>
                                <div class="media-body">
                                    <h3 class="heading mb-3">Activities</h3>
                                    <p>Sebuah sungai kecil bernama Duden mengalir di dekat tempat mereka dan memasok
                                        kebutuhannya
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-6 d-flex align-self-stretch ftco-animate">
                            <div class="services services-1 color-2 d-block img"
                                style="background-image: url('{{ asset('template/images/services-2.jpg') }}');">
                                <div class="icon d-flex align-items-center justify-content-center"><span
                                        class="flaticon-route"></span></div>
                                <div class="media-body">
                                    <h3 class="heading mb-3">Travel Arrangements</h3>
                                    <p>Sebuah sungai kecil bernama Duden mengalir di dekat tempat mereka dan memasok
                                        kebutuhannya
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-6 d-flex align-self-stretch ftco-animate">
                            <div class="services services-1 color-3 d-block img"
                                style="background-image: url('{{ asset('template/images/services-3.jpg') }}');">
                                <div class="icon d-flex align-items-center justify-content-center"><span
                                        class="flaticon-tour-guide"></span></div>
                                <div class="media-body">
                                    <h3 class="heading mb-3">Private Guide</h3>
                                    <p>Sebuah sungai kecil bernama Duden mengalir di dekat tempat mereka dan memasok
                                        kebutuhannya
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-6 d-flex align-self-stretch ftco-animate">
                            <div class="services services-1 color-4 d-block img"
                                style="background-image: url('{{ asset('template/images/services-4.jpg') }}');">
                                <div class="icon d-flex align-items-center justify-content-center"><span
                                        class="flaticon-map"></span></div>
                                <div class="media-body">
                                    <h3 class="heading mb-3">Location Manager</h3>
                                    <p>Sebuah sungai kecil bernama Duden mengalir di dekat tempat mereka dan memasok
                                        kebutuhannya
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section" id="destination">
        <div class="container">
            <div class="row justify-content-center pb-4">
                <div class="col-md-12 heading-section text-center ftco-animate">
                    <span class="subheading">Destinasi</span>
                    <h2 class="mb-4">Tujuan Destinasi</h2>
                </div>
            </div>
            <div class="row">
                @forelse ($destinations as $destination)
                    <div class="col-md-4 ftco-animate">
                        <div class="project-wrap">
                            <a href="#" class="img"
                                style="background-image: url('{{ $destination->image ?? asset('template/images/destination-2.jpg') }}');">
                                <span class="price">
                                    @currency($destination->price)
                                </span>
                            </a>
                            <div class="text p-4">
                                {{-- <span class="days">8 Days Tour</span> --}}
                                <h3><a href="#">{{ $destination->name }}</a></h3>
                                <p class="location"><span class="fa fa-map-marker"></span>
                                    {{ $destination->location->name }}
                                </p>
                                {{-- p desc max 100 text --}}
                                <p>{{ Str::limit($destination->description, 100) }}</p>
                                {{-- <ul>
                                    <li><span class="flaticon-shower"></span>2</li>
                                    <li><span class="flaticon-king-size"></span>3</li>
                                    <li><span class="flaticon-mountains"></span>Near Mountain</li>
                                </ul> --}}
                                <div class="d-flex justify-content-end">
                                    <button type="button" class="btn btn-primary" onclick="openBookingModal('{{ $destination }}')">
                                        Pesan
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-md-12 text-center">
                        <h3>Belum ada destinasi yang tersedia</h3>
                    </div>
                @endforelse
            </div>
        </div>
    </section>

    <section class="ftco-intro ftco-section ftco-no-pt">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12 text-center">
                    <div class="img" style="background-image: url('{{ asset('template/images/bg_2.jpg') }}');">
                        <div class="overlay"></div>
                        <h2>Kami Adalah Jalankuy Travel Agency</h2>
                        <p>Kami dapat mengelola bangunan impian Anda Sebuah sungai kecil bernama Duden mengalir di
                            tempatnya</p>
                        <p class="mb-0"><a href="#" class="btn btn-primary px-4 py-3">Minta Penawaran</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

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

    <!-- Modal Pesan (Booking) -->
    <div class="modal fade" id="bookingModal" tabindex="-1"
        aria-labelledby="bookingModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="bookingModalLabel">Pesan Destinasi
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ route('user.booking') }}" method="post">
                    @csrf
                    <div class="modal-body">
                        <div class="row">
                            <input type="hidden" name="id_destinasi_pesan" id="id_destinasi_pesan">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="fullname">Nama Pengunjung</label>
                                    <input type="text" class="form-control" id="fullname" name="fullname"
                                        placeholder="Masukan nama lengkap pengunjung">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" id="email" name="email"
                                        placeholder="Masukan email pengunjung">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="check_in">Tanggal Check In</label>
                                    <input type="date" class="form-control" id="check_in" name="check_in"
                                        placeholder="Masukan Tanggal Check In">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="check_out">Tanggal Check Out</label>
                                    <input type="date" class="form-control" id="check_out" name="check_out"
                                        placeholder="Masukan Tanggal Check Out">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="total_guests">Total Pengunjung</label>
                                    <input type="number" class="form-control" id="total_guests" name="total_guests"
                                        placeholder="Masukan Total Pengunjung">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="total_harga_penginap">Harga/Pengunjung</label>
                                    <input type="number" class="form-control"
                                        id="total_harga_pengunjung" placeholder="Harga/Pengunjung" name="total_harga_pengunjung"
                                        readonly>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="total_price">Total Harga</label>
                                    <input type="number" class="form-control" id="total_price" name="total_price"
                                        placeholder="Total Harga" readonly>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary"
                            data-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary">Lanjut</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4"
                stroke="#eeeeee" />
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4"
                stroke-miterlimit="10" stroke="#F96D00" />
        </svg>
    </div>


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
    {{-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script> --}}
    {{-- <script src="{{ asset('template/js/google-map.js') }}"></script> --}}
    <script src="{{ asset('template/js/main.js') }}"></script>

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

    <script>
        const listMaksHarga = [
            1000000,
            2000000,
            3000000,
            4000000,
            5000000,
            6000000,
            7000000,
            8000000,
            9000000,
            10000000,
        ];

        const tourPrice = document.getElementById('tour-price');
        // const hotelPrice = document.getElementById('hotel-price');
        listMaksHarga.forEach(harga => {
            const option = document.createElement('option');
            option.value = harga;
            option.text = `${new Intl.NumberFormat('ID', {
                style: 'currency',
                currency: 'IDR',
                maximumSignificantDigits: 2
            }).format(harga)}`;
            tourPrice.appendChild(option);
            // hotelPrice.appendChild(option.cloneNode(true));
        });
    </script>

    <script>
        $(document).ready(function() {
            // read url_video.json
            $.getJSON("{{ asset('json/url_video.json') }}", function(data) {
                // set video url
                $('#video-hero-section').attr('href', data.url);
            });

            // Get Total Harga * Total Pengunjung = Total Harga
            $('#total_guests').on('input', function() {
                const totalGuests = $(this).val();

                if(totalGuests <= 0) {
                    $('#total_price').val(0);
                    return;
                }

                const totalHargaPengunjung = $('#total_harga_pengunjung').val();
                const totalHarga = totalGuests * totalHargaPengunjung;
                $('#total_price').val(totalHarga);
            });
        });

        function openBookingModal(destination) {
            const data = JSON.parse(destination);
            $('#bookingModalLabel').text(`Pesan Destinasi ${data.name}`);
            $('#bookingModal').modal('show');

            $('#total_harga_pengunjung').val(data.price);
            $('#id_destinasi_pesan').val(data.id);
        }
    </script>

</body>

</html>
