@extends('dashboard.app')

@section('title', 'Edit Berita')

@section('content')
<div class="page-content">
    <div class="row">
        <div class="col-lg-12">
            <form method="POST" action="{{ route('berita.update', $berita->id_berita) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <input type="hidden" name="token" value="{{ $token }}">
                <input type="hidden" name="security" value="{{ md5($token . $secret_key) }}">

                <div class="form-group mb-3">
                    <label>Judul Berita</label>
                    <input class="form-control" name="judul" value="{{ $berita->judul }}" required>
                </div>
                <div class="form-group mb-3">
                    <label>Ringkasan</label>
                    <input class="form-control" name="ringkasan" value="{{ $berita->ringkasan }}" required>
                </div>
                <div class="form-group mb-3">
                    <label>Tanggal Berita</label>
                    <input type="date" class="form-control" name="tanggal_berita" value="{{ $berita->tanggal_berita }}" required>
                </div>
                <div class="form-group mb-3">
                    <label>Foto (file .webp)</label>
                    <input type="file" name="file_foto">
                    <small class="form-text text-muted">Biarkan kosong jika tidak ingin mengganti foto.</small>
                </div>
                <div class="form-group mb-3">
                    <label>Isi Halaman</label>
                    <textarea class="form-control" name="content" rows="20" id="editor">{{ $berita->content }}</textarea>
                </div>
                <div class="form-group mb-3">
                    <button type="submit" class="btn btn-primary">Update</button>
                    <a href="{{ route('berita') }}" class="btn btn-danger">Kembali</a>
                </div>
            </form>
        </div>
    </div>
</div>

<script src="https://cdn.ckeditor.com/4.21.0/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace('editor');
</script>
@endsection
