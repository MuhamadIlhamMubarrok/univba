@extends('dashboard.app')

@section('title', 'Tambah Gambar Galeri')

@section('content')
    @push('style')
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/css/dropify.min.css"
            integrity="sha512-EZSUkJWTjzDlspOoPSpUFR0o0Xy7jdzW//6qhUkoZ9c4StFkVsp9fbbd0O06p9ELS3H486m4wmrCELjza4JEog=="
            crossorigin="anonymous" referrerpolicy="no-referrer" />
    @endpush
    <div class="page-content">
        <nav class="page-breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="{{ route('gallery.index') }}">Galeri</a></li>
                <li class="breadcrumb-item active" aria-current="page">Tambah Gambar</li>
            </ol>
        </nav>

        <div class="row">
            <div class="stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Tambah Gambar Galeri</h4>

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

                        <form action="{{ route('gallery.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group mb-4">
                                <label for="kategori" class="form-label">Kategori</label>
                                <select class="form-control @error('kategori') is-invalid @enderror" id="kategori"
                                    name="kategori">
                                    <option value="">-- Pilih Kategori --</option>
                                    <option value="Event Kampus" {{ old('kategori') == 'Event Kampus' ? 'selected' : '' }}>
                                        Event Kampus</option>
                                    <option value="Fasilitas Kampus"
                                        {{ old('kategori') == 'Fasilitas Kampus' ? 'selected' : '' }}>Fasilitas Kampus
                                    </option>
                                    <option value="Kegiatan Mahasiswa"
                                        {{ old('kategori') == 'Kegiatan Mahasiswa' ? 'selected' : '' }}>Kegiatan Mahasiswa
                                    </option>
                                </select>
                                @error('kategori')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>


                            <div class="form-group mb-4">
                                <label for="file" class="form-label">Gambar</label>
                                <input type="file" class="form-control dropify @error('file') is-invalid @enderror"
                                    id="file" name="file" value="{{ old('file') }}">
                                @error('file')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-check mb-4">
                                <input type="checkbox" class="form-check-input" id="active" name="active"
                                    {{ old('active') ? 'checked' : '' }}>
                                <label class="form-check-label" for="active">Aktif</label>
                            </div>

                            <button type="submit" class="btn btn-primary mt-3">Simpan</button>
                            <a href="{{ route('gallery.index') }}" class="btn btn-secondary mt-3">Kembali</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('script')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/js/dropify.min.js"
        integrity="sha512-8QFTrG0oeOiyWo/VM9Y8kgxdlCryqhIxVeRpWSezdRRAvarxVtwLnGroJgnVW9/XBRduxO/z1GblzPrMQoeuew=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        $('.dropify').dropify();
    </script>
    <script>
        // Fungsi untuk menghilangkan alert error setelah 10 detik
        document.addEventListener("DOMContentLoaded", function() {
            const errorAlert = document.getElementById("error-alert");
            if (errorAlert) {
                setTimeout(() => {
                    errorAlert.style.display = "none";
                }, 10000); // 10 detik
            }
        });
    </script>
@endpush
