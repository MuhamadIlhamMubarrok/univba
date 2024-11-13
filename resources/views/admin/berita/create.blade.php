@extends('dashboard.app')

@section('title', 'Tambah Berita')
@section('content')
<div class="page-content">
    <div class="row">
        <div class="col-lg-12">
            <form method="POST" action="{{ route('berita.store') }}" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="token" value="{{ $token }}">
                <input type="hidden" name="security" value="{{ md5($token . $secret_key) }}">

                <div class="form-group mb-3">
                    <label>Judul Berita</label>
                    <input class="form-control" name="judul" placeholder="Masukan Judul" required>
                </div>
                <div class="form-group mb-3">
                    <label>Ringkasan</label>
                    <input class="form-control" name="ringkasan" placeholder="Masukkan ringkasan" required>
                </div>
                <div class="form-group mb-3">
                    <label>Tanggal Berita</label>
                    <input type="date" class="form-control" name="tanggal_berita" required>
                </div>
                <div class="form-group mb-3">
                    <label>Foto (file .webp)</label>
                    <input type="file" name="file_foto">
                </div>
                <div class="form-group mb-3">
                    <label>Isi Halaman</label>
                    <textarea class="form-control" name="content" rows="20" id="editor" required></textarea>
                </div>
                <div class="form-group mb-3">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <button type="reset" class="btn btn-danger">Reset</button>
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
