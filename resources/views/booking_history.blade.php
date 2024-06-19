@extends('layouts.landing')
@section('content')
    <div class="hero-wrap js-fullheight" style="background-image: url('{{ asset('template/images/bg_4.jpg') }}');">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-center" data-scrollax-parent="true">
                <div class="col-md-7 ftco-animate">
                    <span class="subheading">Terimakasih telah melakukan pemesanan di Jalankuy</span>
                    <h1 class="mb-4">Jelajahi Tempat Yang Kamu Inginkan Bersama Kami</h1>
                    <p class="caps">Duduk manis dan tunggu tiket perjalanan kamu</p>
                </div>
                <a href="#" id="video-hero-section"
                    class="icon-video popup-vimeo d-flex align-items-center justify-content-center mb-4">
                    <span class="fa fa-play"></span>
                </a>
            </div>
        </div>
    </div>

    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center pb-4">
                <div class="col-md-12 heading-section text-center ftco-animate">
                    <span class="subheading">Riwayat Pemesanan Kamu</span>
                    <h2 class="mb-4">Riwayat Destinasi</h2>
                </div>
            </div>
            <div class="row">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">No.</th>
                            <th scope="col">Check In</th>
                            <th scope="col">Check Out</th>
                            <th scope="col">Destinasi</th>
                            <th scope="col">Lokasi Destinasi</th>
                            <th scope="col">Total Tamu</th>
                            <th scope="col">Total Harga</th>
                            <th scope="col">Status Konfirmasi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($bookings as $booking)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ \Carbon\Carbon::parse($booking->check_in)->isoFormat('dddd, D MMMM Y') }}</td>
                                <td>{{ \Carbon\Carbon::parse($booking->check_out)->isoFormat('dddd, D MMMM Y') }}</td>
                                <td>{{ $booking->destination->name }}</td>
                                <td>{{ $booking->destination->location->name }}</td>
                                <td>{{ $booking->total_guests }} Tamu</td>
                                <td>@currency($booking->total_price)</td>
                                <td>
                                    @if ($booking->status == 'pending')
                                        <span class="badge badge-warning">Pending</span>
                                    @elseif ($booking->status == 'approved')
                                        <span class="badge badge-success">Approved</span>
                                    @else
                                        <span class="badge badge-danger">Rejected</span>
                                    @endif
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="8" class="text-center">Tidak ada data</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </section>
@endsection
