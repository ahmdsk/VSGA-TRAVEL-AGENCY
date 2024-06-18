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
                    <div class="card">
                        <div class="card-body">

                            <table id="datatable" class="table table-bordered dt-responsive  nowrap w-100">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Gambar</th>
                                        <th>Destinasi</th>
                                        <th>Deskripsi</th>
                                        <th>Harga</th>
                                        <th>Maks. Lama Hari</th>
                                        <th>Kapasitas</th>
                                        <th>Lokasi</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($destinations as $destination)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>
                                                @if ($destination->image != null)
                                                    <img src="{{ asset('storage/' . $destination->image) }}"
                                                        alt="{{ $destination->name }}" class="img-fluid"
                                                        style="max-width: 100px;">
                                                @else
                                                    Tidak ada gambar
                                                @endif
                                            </td>
                                            <td>{{ $destination->name }}</td>
                                            <td>{{ $destination->description ?? '-' }}</td>
                                            <td>
                                                {{ 'Rp ' . number_format($destination->price, 0, ',', '.') }}
                                            </td>
                                            <td>{{ $destination->duration_day ?? 0 }} Hari</td>
                                            <td>{{ $destination->capacity }}</td>
                                            <td>{{ $destination->location->name }}</td>
                                            <td>
                                                <a href="{{ $destination->id }}"
                                                    class="btn btn-warning btn-sm">Edit</a>
                                                <form action="{{ route('destinations.destroy', $destination->id) }}"
                                                    method="POST" class="d-inline">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="btn btn-danger btn-sm"
                                                        onclick="return confirm('Apakah Anda yakin ingin menghapus destinasi ini?')">Hapus</button>
                                                </form>
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
