<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <title>Masuk ke akun | Jalankuy - Cari Kemudahan Liburan Bersama Keluarga Dengan Pemesanan Secara Online</title>
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
    <div class="account-pages my-5 pt-sm-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6 col-xl-5">
                    <div class="card overflow-hidden">
                        <div class="bg-primary bg-soft">
                            <div class="row">
                                <div class="col-7">
                                    <div class="text-primary py-4 px-3">
                                        <h5 class="text-primary">Selamat datang kembali !</h5>
                                        <p>Masuk untuk melanjutkan pemesanan.</p>
                                    </div>
                                </div>
                                <div class="col-5 align-self-end">
                                    <img src="{{ asset('template_dashboard/images/profile-img.png') }}" alt=""
                                        class="img-fluid">
                                </div>
                            </div>
                        </div>
                        <div class="card-body pt-0">
                            <div class="auth-logo">
                                <a href="{{ route('landing-page.index') }}" class="auth-logo-light">
                                    <div class="avatar-md profile-user-wid mb-4">
                                        <span class="avatar-title rounded-circle bg-light">
                                            <img src="{{ asset('template_dashboard/images/logo-light.svg') }}" alt=""
                                                class="rounded-circle" height="34">
                                        </span>
                                    </div>
                                </a>

                                <a href="{{ route('landing-page.index') }}" class="auth-logo-dark">
                                    <div class="avatar-md profile-user-wid mb-4">
                                        <span class="avatar-title rounded-circle bg-light">
                                            <img src="{{ asset('template_dashboard/images/logo.svg') }}" alt=""
                                                class="rounded-circle" height="34">
                                        </span>
                                    </div>
                                </a>
                            </div>
                            <div class="p-2">
                                <form class="form-horizontal" action="{{ route('login') }}" method="POST">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="email" class="form-label">Email</label>
                                        <input type="email" class="form-control @error('email') is-invalid @enderror"
                                            id="email" name="email" placeholder="Masukan email" value="{{ old('email') }}">
                                        @error('email')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label">Password</label>
                                        <div class="input-group auth-pass-inputgroup">
                                            <input type="password"
                                                class="form-control @error('password') is-invalid @enderror"
                                                placeholder="Enter password" name="password" aria-label="Password"
                                                aria-describedby="password-addon" value="{{ old('password') }}">
                                            <button class="btn btn-light " type="button" id="password-addon"><i
                                                    class="mdi mdi-eye-outline"></i></button>
                                            @error('password')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="remember-check">
                                        <label class="form-check-label" for="remember-check">
                                            Ingatkan saya
                                        </label>
                                    </div>

                                    <div class="mt-3 d-grid">
                                        <button class="btn btn-primary waves-effect waves-light"
                                            type="submit">Masuk</button>
                                    </div>

                                    <div class="mt-4 text-center">
                                        <a href="#" class="text-muted"><i class="mdi mdi-lock me-1"></i> Saya lupa
                                            password?</a>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                    <div class="mt-5 text-center">

                        <div>
                            <p>Belum memiliki akun ? <a href="auth-register.html" class="fw-medium text-primary">
                                    Daftar disini </a> </p>
                            <p>©
                                <script>
                                    document.write(new Date().getFullYear())
                                </script> Alright reserved.
                                {{-- Crafted with <i class="mdi mdi-heart text-danger"></i>
                                by Themesbrand --}}
                            </p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
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
