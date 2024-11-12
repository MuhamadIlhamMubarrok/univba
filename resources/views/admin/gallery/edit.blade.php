@extends('dashboard.app')

@section('title', 'Edit Data Beranda')

@section('content')
<div class="row">
    <div class="col-lg-12">
        <form method="POST" action="{{ route('beranda.update', $beranda->id) }}">
            @csrf
            @method('PUT')
            
            <input type="hidden" name="token" value="{{ $token }}">

            <div class="form-group">
                <label>Halaman</label>
                <select name="page" class="form-control" required>
                    <option value="">--Pilih Halaman--</option>
                    @foreach ($pages as $page)
                        <option value="{{ $page->id }}" {{ $page->id == $beranda->page_id ? 'selected' : '' }}>
                            {{ $page->judul }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label>Posisi</label>
                <select name="posisi" class="form-control" required>
                    <option value="">--Pilih Posisi--</option>
                    <option value="slide" {{ $beranda->tipe == 'slide' ? 'selected' : '' }}>Slide</option>
                    <option value="posisi1" {{ $beranda->tipe == 'posisi1' ? 'selected' : '' }}>Posisi 1</option>
                    <option value="posisi2" {{ $beranda->tipe == 'posisi2' ? 'selected' : '' }}>Posisi 2</option>
                    <option value="posisi3" {{ $beranda->tipe == 'posisi3' ? 'selected' : '' }}>Posisi 3</option>
                    <option value="posisi4" {{ $beranda->tipe == 'posisi4' ? 'selected' : '' }}>Posisi 4</option>
                    <option value="posisi5" {{ $beranda->tipe == 'posisi5' ? 'selected' : '' }}>Posisi 5</option>
                </select>
            </div>

            <div class="form-group">
                <label>Urutan</label>
                <input type="number" name="urut" class="form-control" value="{{ $beranda->urut }}" required>
            </div>

            <div class="form-group">
                <label>Aktif</label>
                <input type="checkbox" name="active" value="1" {{ $beranda->active ? 'checked' : '' }}>
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary">Update</button>
                <a href="{{ route('beranda.index') }}" class="btn btn-danger">Kembali</a>
            </div>
        </form>
    </div>
</div>
@endsection
