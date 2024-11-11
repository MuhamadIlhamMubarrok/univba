@extends('dashboard.app')

@section('title', 'Profile User')

@section('content')

    @push('style')
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/css/dropify.min.css"
            integrity="sha512-EZSUkJWTjzDlspOoPSpUFR0o0Xy7jdzW//6qhUkoZ9c4StFkVsp9fbbd0O06p9ELS3H486m4wmrCELjza4JEog=="
            crossorigin="anonymous" referrerpolicy="no-referrer" />
    @endpush

    <div class="page-content">
        <div class="container">
            <h2 style="margin-bottom: 50px">Profile</h2>

            @if (session('success'))
                <div id="alert-success" class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

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

            <form action="{{ route('profile.update', $user->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="name" class="form-label">Nama</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ $user->name }}"
                        required>
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" value="{{ $user->email }}"
                        required>
                </div>

                <div class="mb-3">
                    <label for="gambar" class="form-label">Foto Profil</label>
                    <input type="file" class="form-control dropify" id="gambar"
                        data-default-file="{{ $user->gambar ? asset('storage/userImage/' . $user->gambar) : asset('assets/user/profil.jpg') }}"
                        name="gambar">
                </div>

                <div class="mb-3">
                    <label for="kampus" class="form-label">Nama Kampus</label>
                    <input type="text" class="form-control" id="kampus" name="kampus" value="{{ $user->kampus }}"
                        required>
                </div>

                <div class="mb-3">
                    <label for="logo" class="form-label">Logo Kampus</label>
                    <input type="file" class="form-control dropify" id="logo"
                        data-default-file="{{ $user->logo ? asset('storage/userImage/' . $user->logo) : 'https://kuliahkaryawan.net/assets/images/logok2-shadow.png' }}"
                        name="logo">
                </div>

                <button type="submit" class="btn btn-primary">Update Profile</button>
            </form>
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
    <script>
        // Fungsi untuk menghilangkan alert error setelah 10 detik
        document.addEventListener("DOMContentLoaded", function() {
            const errorAlert = document.getElementById("alert-success");
            if (errorAlert) {
                setTimeout(() => {
                    errorAlert.style.display = "none";
                }, 10000); // 10 detik
            }
        });
    </script>
@endpush
