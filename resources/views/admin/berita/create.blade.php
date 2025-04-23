@extends('dashboard.app')

@section('title', 'Tambah Berita')
@section('content')
    <div class="page-content">
        <nav class="page-breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="{{ route('berita') }}">Berita Terkini</a></li>
                <li class="breadcrumb-item active" aria-current="page">Tambah Berita</li>
            </ol>
        </nav>

        <div class="row">
            <div class="stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Tambah Berita</h4>

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

                        <form method="POST" action="{{ route('berita.store') }}" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="token" value="{{ $token }}">
                            <input type="hidden" name="security" value="{{ md5($token . $secret_key) }}">

                            <div class="form-group mb-3">
                                <label class="form-label">Judul Berita</label>
                                <input class="form-control" name="judul" value="{{ old('judul') }}"
                                    placeholder="Masukan Judul" required>
                            </div>
                            <div class="form-group mb-3">
                                <label class="form-label">Ringkasan</label>
                                <input class="form-control" name="ringkasan" placeholder="Masukkan ringkasan"
                                    value="{{ old('ringkasan') }}" required>
                            </div>
                            <div class="form-group mb-3">
                                <label class="form-label">Tanggal Berita</label>
                                <input type="date" class="form-control" name="tanggal_berita"
                                    value="{{ old('tanggal_berita') }}" required>
                            </div>
                            <div class="form-group mb-3">
                                <label class="form-label">Foto (file .webp)</label>
                                <input type="file" name="file_foto" value="{{ old('file_foto') }}"
                                    class="form-control dropify @error('file') is-invalid @enderror">
                            </div>
                            <div class="form-group mb-3">
                                <label class="form-label">Isi Halaman</label>
                                <textarea class="form-control" name="content" rows="20" id="editor" value="{{ old('content') }}" required></textarea>
                            </div>
                            <div class="form-group mb-3">
                                <button type="submit" class="btn btn-primary">Simpan</button>
                                <button type="reset" class="btn btn-danger">Reset</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    @push('script')
        <script src="https://cdn.ckeditor.com/4.21.0/standard/ckeditor.js"></script>
        <script>
            CKEDITOR.replace('editor');
        </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/js/dropify.min.js"
            integrity="sha512-8QFTrG0oeOiyWo/VM9Y8kgxdlCryqhIxVeRpWSezdRRAvarxVtwLnGroJgnVW9/XBRduxO/z1GblzPrMQoeuew=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script>
            $('.dropify').dropify();
        </script>
    @endpush


@endsection
