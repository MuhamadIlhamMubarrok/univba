@extends('dashboard.app')

@section('title', 'Data Pengaturan')

@section('content')
    <div class="page-content">
        <nav class="page-breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">Data Settings</li>
            </ol>
        </nav>

        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title">Data Settings</h6>
                        <a href="{{ route('settings.create') }}" class="btn btn-primary mb-3">
                            <i class="fa fa-plus"></i> Tambah Pengaturan
                        </a>

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
                                        <th>Jenis</th>
                                        <th>Nama Pengaturan</th>
                                        <th>Nilai</th>
                                        <th>Aktif</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($settings as $setting)
                                        <tr>
                                            <td>{{ $setting->jenis_set }}</td>
                                            <td>{{ $setting->nama_set }}</td>
                                            <td>{{ $setting->nilai_set }}</td>
                                            <td>{{ $setting->active ? 'Aktif' : 'Tidak Aktif' }}</td>
                                            <td>
                                                <div class="d-flex flex-wrap gap-2">
                                                    <a href="{{ route('settings.edit', $setting->id_setting) }}"
                                                        class="btn btn-warning btn-sm">
                                                        <i class="fa fa-edit"></i> Edit
                                                    </a>
                                                    <form action="{{ route('settings.destroy', $setting->id_setting) }}"
                                                        method="POST" style="display:inline-block;">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button class="btn btn-danger btn-sm"
                                                            onclick="return confirm('Yakin ingin hapus?')">
                                                            <i class="fa fa-trash"></i> Hapus
                                                        </button>
                                                    </form>
                                                    <a href="{{ route('settings.toggleStatus', $setting->id_setting) }}"
                                                        class="btn {{ $setting->active ? 'btn-success' : 'btn-secondary' }} btn-sm">
                                                        {{ $setting->active ? 'Nonaktifkan' : 'Aktifkan' }}
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <div class="mt-3">
                                {{ $settings->links('vendor.pagination.simple-bootstrap-5') }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
