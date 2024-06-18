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
                                        <th>No.</th>
                                        <th>Gambar</th>
                                        <th>Lokasi</th>
                                        <th>Deskripsi</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($locations as $location)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>
                                                @if ($location->image != null)
                                                    <img src="{{ $location->image }}" alt="{{ $location->name }}"
                                                        class="img-fluid" style="max-width: 100px;">
                                                @else
                                                    Tidak ada gambar
                                                @endif
                                            </td>
                                            <td>{{ $location->name }}</td>
                                            <td>{{ $location->description ?? '-' }}</td>
                                            <td>
                                                <button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal"
                                                    data-bs-target="#editModal-{{ $location->id }}">
                                                    Edit
                                                </button>
                                                <button class="btn btn-danger btn-sm"
                                                    onclick="hapusData('{{ base64_encode($location->id) }}')">Hapus</button>
                                            </td>
                                        </tr>

                                        <!-- Modal Edit -->
                                        <div class="modal fade" id="editModal-{{ $location->id }}" tabindex="-1"
                                            aria-labelledby="editModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h1 class="modal-title fs-5" id="editModalLabel">Edit Lokasi</h1>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <form
                                                        action="{{ route('locations.update', base64_encode($location->id)) }}"
                                                        method="post" enctype="multipart/form-data">
                                                        <div class="modal-body">
                                                            @csrf
                                                            <div class="row">
                                                                <div class="col-12">
                                                                    <div class="mb-3">
                                                                        <label for="location"
                                                                            class="form-label">Lokasi</label>
                                                                        <input type="text" class="form-control"
                                                                            id="location" name="location" required
                                                                            placeholder="Masukan nama lokasi"
                                                                            value="{{ $location->name }}" />
                                                                    </div>
                                                                </div>
                                                                <div class="col-12">
                                                                    <div class="mb-3">
                                                                        <label for="description"
                                                                            class="form-label">Deskripsi <sup
                                                                                style="font-style: italic">(Optional)</sup></label>
                                                                        <textarea class="form-control" id="description" name="description" rows="3" placeholder="Masukan deskripsi">{{ $location->description }}</textarea>
                                                                    </div>
                                                                </div>
                                                                <div class="col-12">
                                                                    @if ($location->image)
                                                                        <div class="pb-2">
                                                                            <img src="{{ $location->image }}"
                                                                                alt="{{ $location->name }}"
                                                                                style="width: 100px;">
                                                                        </div>
                                                                    @endif
                                                                    <div class="mb-3">
                                                                        <label for="image" class="form-label">Gambar
                                                                            <sup
                                                                                style="font-style: italic">(Optional)</sup></label>
                                                                        <input class="form-control" type="file"
                                                                            id="image" name="image" />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-bs-dismiss="modal">Batal</button>
                                                            <button type="submit" class="btn btn-primary">Simpan</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
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

    <!-- Modal Add -->
    <div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="addModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="addModalLabel">Tambah Lokasi</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ route('locations.store') }}" method="post" enctype="multipart/form-data">
                    <div class="modal-body">
                        @csrf
                        <div class="row">
                            <div class="col-12">
                                <div class="mb-3">
                                    <label for="location" class="form-label">Lokasi</label>
                                    <input type="text" class="form-control" id="location" name="location" required
                                        placeholder="Masukan nama lokasi" />
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mb-3">
                                    <label for="description" class="form-label">Deskripsi <sup
                                            style="font-style: italic">(Optional)</sup></label>
                                    <textarea class="form-control" id="description" name="description" rows="3" placeholder="Masukan deskripsi"></textarea>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mb-3">
                                    <label for="image" class="form-label">Gambar <sup
                                            style="font-style: italic">(Optional)</sup></label>
                                    <input class="form-control" type="file" id="image" name="image" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
@push('script')
    <script>
        let dataId;

        function hapusData(id) {
            console.log(id)

            Swal.fire({
                icon: "question",
                title: "Kamu yakin ingin menghapus data ini?",
                showDenyButton: true,
                confirmButtonText: "Hapus",
                denyButtonText: "Batal"
            }).then((result) => {
                /* Read more about isConfirmed, isDenied below */
                if (result.isConfirmed) {
                    $.ajax({
                        url: "{{ url('locations/delete/') }}" + '/' + id,
                        type: 'POST',
                        data: {
                            "_token": "{{ csrf_token() }}"
                        },
                        success: function(res) {
                            Swal.fire({
                                icon: "success",
                                title: "Berhasil Hapus Data!",
                            }).then((result) => {
                                if (result.isConfirmed) {
                                    location.reload()
                                }
                            });
                        },
                        error: function(err) {
                            Swal.fire({
                                icon: "error",
                                title: "Gagal Hapus Data!",
                            }).then((result) => {
                                if (result.isConfirmed) {
                                    location.reload()
                                }
                            });
                        }
                    })
                }
            });
        }
    </script>
@endpush
