@extends('dashboard.app')

@section('title', 'Edit Data Beranda')

@section('content')
    <div class="page-content">
        <nav class="page-breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="{{ route('beranda') }}">Data Beranda</a></li>
                <li class="breadcrumb-item active" aria-current="page">Edit Beranda</li>
            </ol>
        </nav>
        <div class="row">
            <div class="stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Edit Beranda</h4>

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

                        <form method="POST" action="{{ route('beranda.edit', $beranda->beranda_id) }}">
                            @csrf
                            @method('PUT')

                            <input type="hidden" name="token" value="{{ $token }}">

                            <div class="form-group mb-3">
                                <label class="form-label">Halaman</label>
                                <select name="page" class="form-control" required>
                                    <option value="">--Pilih Halaman--</option>
                                    @foreach ($pages as $page)
                                        <option value="{{ $page->id }}"
                                            {{ $page->id == $beranda->page_id ? 'selected' : '' }}>
                                            {{ $page->judul }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group mb-3">
                                <label class="form-label">Posisi</label>
                                <select name="posisi" class="form-control" required>
                                    <option value="">--Pilih Posisi--</option>
                                    <option value="slide" {{ $beranda->tipe == 'slide' ? 'selected' : '' }}>Slide</option>
                                    <option value="posisi1" {{ $beranda->tipe == 'posisi1' ? 'selected' : '' }}>Posisi 1
                                    </option>
                                    <option value="posisi2" {{ $beranda->tipe == 'posisi2' ? 'selected' : '' }}>Posisi 2
                                    </option>
                                    <option value="posisi3" {{ $beranda->tipe == 'posisi3' ? 'selected' : '' }}>Posisi 3
                                    </option>
                                    <option value="posisi4" {{ $beranda->tipe == 'posisi4' ? 'selected' : '' }}>Posisi 4
                                    </option>
                                    <option value="posisi5" {{ $beranda->tipe == 'posisi5' ? 'selected' : '' }}>Posisi 5
                                    </option>
                                </select>
                            </div>

                            <div class="form-group mb-3">
                                <label class="form-label">Urutan</label>
                                <input type="number" name="urut" class="form-control" value="{{ $beranda->urut }}"
                                    required>
                            </div>

                            <div class="form-group mb-3">
                                <label class="form-label">Aktif</label>
                                <input type="checkbox" name="active" value="1"
                                    {{ $beranda->active ? 'checked' : '' }}>
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Update</button>
                                <a href="{{ route('beranda') }}" class="btn btn-danger">Kembali</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
