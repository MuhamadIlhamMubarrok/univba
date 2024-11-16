@extends('dashboard.app')

@section('title', 'Edit Pengaturan')

@section('content')
    <div class="page-content">
        <nav class="page-breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="{{ route('settings') }}">Data Settings</a></li>
                <li class="breadcrumb-item active" aria-current="page">Edit Settings</li>
            </ol>
        </nav>
        <div class="row">
            <div class="stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Edit Settings</h4>

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

                        <form action="{{ route('settings.update', $setting->id_setting) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="form-group mb-3">
                                <label class="form-label">Jenis Pengaturan</label>
                                <input class="form-control" name="jenis" value="{{ $setting->jenis_set }}" required>
                            </div>
                            <div class="form-group mb-3">
                                <label class="form-label">Nama Pengaturan</label>
                                <input class="form-control" name="nama" value="{{ $setting->nama_set }}" required>
                            </div>
                            <div class="form-group mb-3">
                                <label class="form-label">Nilai Pengaturan</label>
                                <input class="form-control" name="nilai" value="{{ $setting->nilai_set }}">
                            </div>
                            <button type="submit" class="btn btn-primary">Update</button>
                            <a href="{{ route('settings') }}" class="btn btn-secondary">Batal</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
