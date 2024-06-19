@extends('dashboard.layouts.master')
@section('content')
    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0 font-size-18">{{ $title }}</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                                <li class="breadcrumb-item active">{{ $title }}</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-12">
                    <div class="d-flex justify-content-end align-items-center pb-3">
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addModal">
                            Tambah Lokasi
                        </button>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <table id="datatable" class="table table-bordered dt-responsive  nowrap w-100">
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
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($bookings as $booking)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ \Carbon\Carbon::parse($booking->check_in)->isoFormat('ddd, D MMMM Y') }}
                                            </td>
                                            <td>{{ \Carbon\Carbon::parse($booking->check_out)->isoFormat('ddd, D MMMM Y') }}
                                            </td>
                                            <td>{{ $booking->destination->name }}</td>
                                            <td>{{ $booking->destination->location->name }}</td>
                                            <td>{{ $booking->total_guests }} Tamu</td>
                                            <td>@currency($booking->total_price)</td>
                                            <td>
                                                @if ($booking->status == 'pending')
                                                    <span class="badge text-bg-warning">Pending</span>
                                                @elseif ($booking->status == 'approved')
                                                    <span class="badge text-bg-success">Approved</span>
                                                @else
                                                    <span class="badge text-bg-danger">Rejected</span>
                                                @endif
                                            </td>
                                            <td>
                                                <button type="button" class="btn btn-warning btn-sm"
                                                    onclick="konfirmasiPesanan('{{ $booking->id }}')">
                                                    Konfirmasi
                                                </button>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div> <!-- end col -->
            </div> <!-- end row -->
        </div>
        <!-- container-fluid -->
    </div>
    <!-- End Page-content -->
@endsection
@push('script')
    <script>
        function konfirmasiPesanan(id) {
            console.log(id)

            // Swal confirm ajax request
            Swal.fire({
                title: 'Konfirmasi Pesanan',
                text: "Apakah anda yakin ingin mengkonfirmasi pesanan ini?",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Konfirmasi'
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        url: `{{ route('booking.confirm') }}`,
                        type: 'POST',
                        data: {
                            _token: '{{ csrf_token() }}',
                            status: 'approved',
                            id: id
                        },
                        success: function(response) {
                            Swal.fire(
                                'Berhasil!',
                                response.message,
                                'success'
                            ).then(() => {
                                window.location.reload();
                            })
                        },
                        error: function(xhr) {
                            Swal.fire(
                                'Gagal!',
                                xhr.responseJSON.message,
                                'error'
                            ).then(() => {
                                window.location.reload();
                            })
                        }
                    });
                }
            })
        }
    </script>
@endpush
