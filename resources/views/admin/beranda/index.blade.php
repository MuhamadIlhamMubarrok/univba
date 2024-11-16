@extends('dashboard.app')

@section('title', 'Data Beranda')

@section('content')
    @push('style')
        <style>
            /* Responsivitas untuk Tabel */
            .table-responsive {
                overflow-x: auto;
                /* Tambahkan scroll horizontal di layar kecil */
            }

            .table thead {
                background-color: #f8f9fa;
                /* Warna latar belakang header tabel */
                position: sticky;
                top: 0;
                z-index: 1;
            }

            /* Responsivitas Tombol */
            .btn {
                font-size: 0.875rem;
                /* Ukuran font tombol */
                padding: 0.5rem 0.75rem;
                /* Spasi tombol */
            }

            /* Responsivitas untuk Layar Kecil */
            @media (max-width: 576px) {

                .table th,
                .table td {
                    white-space: nowrap;
                    /* Hindari teks terpotong */
                    font-size: 0.8rem;
                    /* Ukuran font lebih kecil */
                }

                .panel-heading a {
                    width: 100%;
                    /* Tombol Tambah Beranda melebar di HP */
                    text-align: center;
                }

                .d-flex {
                    flex-direction: column;
                    /* Tombol Edit dan Hapus ditumpuk vertikal */
                }

                .gap-2 {
                    gap: 0.5rem;
                    /* Jarak antar tombol */
                }
            }
        </style>
    @endpush
    <div class="page-content">
        <nav class="page-breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">Data Beranda</li>
            </ol>
        </nav>
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title">Data Beranda</h6>
                        <div class="panel-heading mb-3">
                            <a href="{{ route('beranda.create') }}" class="btn btn-primary">
                                <i class="fa fa-plus fa-fw"></i> Tambah Beranda
                            </a>
                        </div>
                        <div class="panel-body">
                            @if (session('success'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    {{ session('success') }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                            @endif
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>Posisi</th>
                                            <th>Judul</th>
                                            <th>Urutan</th>
                                            <th>Aktif</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($berandas as $beranda)
                                            <tr>
                                                <td>{{ $beranda->tipe }}</td>
                                                <td>{{ $beranda->page->judul ?? 'No Page' }}</td>
                                                <!-- Use null coalescing to avoid errors -->
                                                <td>{{ $beranda->urut }}</td>
                                                <td>{{ $beranda->active ? 'Aktif' : 'Tidak aktif' }}</td>
                                                <td>
                                                    <div class="d-flex gap-2">
                                                        <a href="{{ route('beranda.edit', $beranda->beranda_id) }}"
                                                            class="btn btn-warning btn-sm">Edit</a>
                                                        <form action="{{ route('beranda.destroy', $beranda->beranda_id) }}"
                                                            method="POST" style="display:inline-block;">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-danger btn-sm"
                                                                onclick="return confirm('Yakin ingin menghapus?')">Hapus</button>
                                                        </form>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                <div class="d-flex justify-content-start mt-4">
                                    {{ $berandas->links('vendor.pagination.simple-bootstrap-5') }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
