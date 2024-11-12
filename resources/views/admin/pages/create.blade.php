@extends('dashboard.app')

@section('title', 'Tambah Data Halaman')

@section('content')
<div class="container">
    <form method="POST" action="{{ route('pages.store') }}">
        @csrf
        <input type="hidden" name="token" value="{{ $token }}">
        <input type="hidden" name="security" value="{{ md5($token . $secret_key) }}">

        <div class="form-group">
            <label>Judul</label>
            <input type="text" class="form-control" name="judul" required>
        </div>

        <div class="form-group">
            <label>Ringkasan</label>
            <input type="text" class="form-control" name="short">
        </div>

        <div class="form-group">
            <label>Isi Halaman</label>
            <textarea class="form-control" name="isi" rows="5" required></textarea>
        </div>

        <div class="form-group">
            <label>Link</label>
            <input type="url" class="form-control" name="link">
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
@endsection
