@extends('dashboard.app')

@section('title', 'Add Data Beranda')

@section('content')
<div class="page-content">
    <div class="row">
        <div class="col-lg-12">
            <form method="POST" action="{{ route('beranda.store') }}">
                @csrf
                <input type="hidden" name="token" value="{{ $token }}">
                <div class="form-group">
                    <label>Halaman</label>
                    <select name="page" class="form-control" required>
                        <option value="">--Pilih Halaman--</option>
                        @foreach ($pages as $page)
                            <option value="{{ $page->id }}">{{ $page->judul }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label>Posisi</label>
                    <select name="posisi" class="form-control" required>
                        <option value="">--Pilih Posisi--</option>
                        <option value="slide">Slide</option>
                        <option value="posisi1">Posisi 1</option>
                        <option value="posisi2">Posisi 2</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Urutan</label>
                    <input type="number" name="urut" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-primary mt-3">Simpan</button>
            </form>
        </div>
    </div>
</div>
@endsection
