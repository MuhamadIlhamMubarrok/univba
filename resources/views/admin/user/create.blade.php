@extends('dashboard.app')

@section('title', 'Tambah Gambar User')

@section('content')
    @push('style')
    @endpush
    <div class="page-content">
        <nav class="page-breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="{{ route('user.index') }}">Data User</a></li>
                <li class="breadcrumb-item active" aria-current="page">Tambah User</li>
            </ol>
        </nav>

        <div class="row">
            <div class="stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Tambah User</h4>

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

                        <form action="{{ route('user.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" name="email" class="form-control" required>
                            </div>
                            <div class="form-group mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" name="name" class="form-control" required>
                            </div>
                            <div class="form-group mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="text" name="password" class="form-control" required>
                            </div>
                            <button type="submit" class="btn btn-primary mt-3">Simpan</button>
                            <a href="{{ route('user.index') }}" class="btn btn-secondary mt-3">Kembali</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('script')
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
