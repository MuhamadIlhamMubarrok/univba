@extends('dashboard.app')

@section('title', 'Edit Pengaturan')

@section('content')
<div class="page-content">
    <form action="{{ route('settings.update', $setting->id_setting) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group mb-3">
            <label>Jenis Pengaturan</label>
            <input class="form-control" name="jenis" value="{{ $setting->jenis_set }}" required>
        </div>
        <div class="form-group mb-3">
            <label>Nama Pengaturan</label>
            <input class="form-control" name="nama" value="{{ $setting->nama_set }}" required>
        </div>
        <div class="form-group mb-3">
            <label>Nilai Pengaturan</label>
            <input class="form-control" name="nilai" value="{{ $setting->nilai_set }}">
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('settings') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection
