@extends('dashboard.app')

@section('title', 'Change Password')

@section('content')

    @push('style')
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/css/dropify.min.css"
            integrity="sha512-EZSUkJWTjzDlspOoPSpUFR0o0Xy7jdzW//6qhUkoZ9c4StFkVsp9fbbd0O06p9ELS3H486m4wmrCELjza4JEog=="
            crossorigin="anonymous" referrerpolicy="no-referrer" />
    @endpush

    <div class="page-content">
        <div class="container">
            <h2 style="margin-bottom: 50px">Change Password</h2>

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

            <form action="{{ route('change.password') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label for="password-baru" class="form-label">Password Baru</label>
                    <input type="password" class="form-control" id="password-baru" name="password-baru" required>
                </div>

                <div class="mb-3">
                    <label for="password-baru_confirmation" class="form-label">Konfirmasi Password</label>
                    <input type="password" class="form-control" id="password-baru_confirmation"
                        name="password-baru_confirmation" required>
                </div>

                <button type="submit" class="btn btn-primary">Change Password</button>
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
                }, 5000); // 10 detik
            }
        });
    </script>
@endpush
