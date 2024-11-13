@extends('dashboard.app')

@section('title', 'Tambah Pengaturan')

@section('content')
    <div class="page-content">
        <nav class="page-breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="{{ route('settings') }}">Settings</a></li>
                <li class="breadcrumb-item active" aria-current="page">Tambah Setting</li>
            </ol>
        </nav>
        <div class="row">
            <div class="stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Tambah Setting</h4>

                        @if ($errors->any())
                            <div id="error-alert" class="alert alert-danger">
                                <strong>Terjadi Kesalahan!</strong>
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form action="{{ route('settings.store') }}" method="POST">
                            @csrf
                            <div class="form-group mb-3">
                                <label class="form-label">Jenis Pengaturan</label>
                                <input class="form-control" name="jenis" placeholder="Masukkan jenis pengaturan" required>
                            </div>
                            <div class="form-group mb-3">
                                <label class="form-label">Nama Pengaturan</label>
                                <input class="form-control" name="nama" placeholder="Masukkan nama pengaturan" required>
                            </div>
                            <div class="form-group">
                                <label class="form-label">Nilai Pengaturan</label>
                                <input class="form-control" name="nilai" placeholder="Masukkan nilai pengaturan">
                            </div>
                            <button type="submit" class="btn btn-primary mt-3">Simpan</button>
                            <a href="{{ route('settings') }}" class="btn btn-secondary mt-3">Batal</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
