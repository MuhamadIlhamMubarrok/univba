@extends('dashboard.app')

@section('title', 'Tambah Pengaturan')

@section('content')
<div class="page-content">
    <form action="{{ route('settings.store') }}" method="POST">
        @csrf
        <div class="form-group mb-3">
            <label>Jenis Pengaturan</label>
            <input class="form-control" name="jenis" placeholder="Masukkan jenis pengaturan" required>
        </div>
        <div class="form-group mb-3">
            <label>Nama Pengaturan</label>
            <input class="form-control" name="nama" placeholder="Masukkan nama pengaturan" required>
        </div>
        <div class="form-group">
            <label>Nilai Pengaturan</label>
            <input class="form-control" name="nilai" placeholder="Masukkan nilai pengaturan">
        </div>
        <button type="submit" class="btn btn-primary mt-3">Simpan</button>
        <a href="{{ route('settings') }}" class="btn btn-secondary mt-3">Batal</a>
    </form>
</div>
@endsection
