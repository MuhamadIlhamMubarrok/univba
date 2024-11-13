@extends('dashboard.app')

@section('title', 'Add Data Beranda')

@section('content')
    <div class="page-content">
        <nav class="page-breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="{{ route('beranda') }}">Beranda</a></li>
                <li class="breadcrumb-item active" aria-current="page">Tambah Beranda</li>
            </ol>
        </nav>
        <div class="row">
            <div class="stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Tambah Gambar Beranda</h4>

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
                        <form method="POST" action="{{ route('beranda.store') }}">
                            @csrf
                            <input type="hidden" name="token" value="{{ $token }}">
                            <div class="form-group mb-3">
                                <label class="form-label">Halaman</label>
                                <select name="page" class="form-control" required>
                                    <option value="">--Pilih Halaman--</option>
                                    @foreach ($pages as $page)
                                        <option value="{{ $page->id }}">{{ $page->judul }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group mb-3">
                                <label class="form-label">Posisi</label>
                                <select name="posisi" class="form-control" required>
                                    <option value="">--Pilih Posisi--</option>
                                    <option value="slide">Slide</option>
                                    <option value="posisi1">Posisi 1</option>
                                    <option value="posisi2">Posisi 2</option>
                                </select>
                            </div>
                            <div class="form-group mb-3">
                                <label class="form-label">Urutan</label>
                                <input type="number" name="urut" class="form-control" required>
                            </div>
                            <button type="submit" class="btn btn-primary mt-3">Simpan</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
