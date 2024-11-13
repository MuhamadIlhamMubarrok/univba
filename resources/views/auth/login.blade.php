@extends('auth.app')

@section('title', 'LOGIN')

@section('content')
    <div class="flex h-screen w-full">
        <div class="hidden md:block w-[50%] h-full bg-[#8394AC]" style="clip-path: ellipse(80% 100% at 10% 50%);">
            <div class="flex flex-col w-full h-full bg-[#00214E]" style="clip-path: ellipse(80% 90% at 10% 50%);">
                {{-- logo --}}
                <div class="flex flex-row items-center justify-start ms-[60px] my-[40px] gap-x-3">
                    <img src="https://kuliahkaryawan.net/assets/images/logok2-shadow.png" class="w-[30px] h-[30px]"
                        alt="">
                    <h1 class="font-bold text-white" style="font-family: 'Poppins';">KULIAH KARYAWAN</h1>
                </div>

                {{-- tengah --}}
                <div class="w-full ms-[20px] ms-[70px] mt-[50px]">
                    <img class="w-[400px]" src="{{ asset('./images/illustration.svg') }}" alt="">
                    <h1 class="text-[40px] text-white font-bold pe-[300px] mt-[23px]" style="font-family: 'Poppins';">A few
                        more clicks to
                        sign in to your account.</h1>
                    <p class="text-[20px] text-[#C6CDD7] pe-[300px]" style="font-family: 'Poppins';">Manage all your collage
                        in one place</p>
                </div>
            </div>
        </div>

        <div class="flex-1 md:ps-[50px] ps-0 h-full bg-white">
            <div id="form-container"
                class="w-[100%] flex flex-col justify-center items-center h-full pt-8 pb-12 px-6 transition-all duration-500 ease-in-out">
                <div id="login-form" class="w-full">
                    <h1 class="text-[20px] text-start font-bold text-[#7C828B] text-[35px]" style="font-family: 'Poppins';">
                        Sign In</h1>
                    <form method="POST" action="{{ route('login.post') }}" class="w-full mt-4 space-y-4">
                        @if ($errors->any())
                            <div id="error-alert"
                                class="flex items-center w-[450px] p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400"
                                role="alert">
                                <svg class="flex-shrink-0 inline w-4 h-4 mr-3" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                                </svg>
                                <span class="sr-only">Error</span>
                                <div>{{ $errors->first() }} !</div>
                            </div>
                        @endif

                        @if (session('message'))
                            <div id="success-alert"
                                class="flex items-center w-[450px] p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400"
                                role="alert">
                                <svg class="flex-shrink-0 inline w-4 h-4 mr-3" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M10 18a8 8 0 1 1 0-16 8 8 0 0 1 0 16zm0-14a6 6 0 1 0 0 12 6 6 0 0 0 0-12z" />
                                    <path
                                        d="M10 8a1 1 0 0 1 .707.293l1.415 1.415a1 1 0 0 1 0 1.414l-4 4a1 1 0 0 1-1.414-1.414l3.293-3.293-2.586-2.586a1 1 0 0 1 1.414-1.414l2 2A1 1 0 0 1 10 8z" />
                                </svg>
                                <span class="sr-only">Success</span>
                                <div>{{ session('message') }} !</div>
                            </div>
                        @endif

                        @csrf
                        <div class="mb-4">
                            <label for="email" class="block text-gray-700 mb-2 font-semibold">Email</label>
                            <input type="email" id="email" name="email"
                                class="w-full max-w-[450px] p-2 border border-gray-300 rounded-lg pl-4" placeholder="Email"
                                required value="{{ old('email') }}">
                            @error('email')
                                <div class="text-red-500 mt-2 text-sm">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <label for="password" class="block text-gray-700 mb-2 font-semibold">Password</label>
                            <input type="password" id="password" name="password"
                                class="w-full max-w-[450px] p-2 border border-gray-300 rounded-lg pl-4"
                                placeholder="Password" required>
                            @error('password')
                                <div class="text-red-500 mt-2 text-sm">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="flex items-center justify-between max-w-[300px] w-full">
                            <button type="submit" style="font-family: 'Poppins';"
                                class="text-white bg-blue-700 font-semibold hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-[40px] py-3 me-2 mb-2 dark:bg-[#00214E] dark:hover:bg-[#022E6B] focus:outline-none ">Login</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>




@endsection

@push('scripts')
    <script>
        // Menghapus alert setelah 1.5 detik dengan efek transisi
        setTimeout(function() {
            const alert = document.getElementById('success-alert');
            if (alert) {
                alert.style.transition = "opacity 0.5s ease"; // Efek transisi
                alert.style.opacity = 0; // Mengurangi opasitas menjadi 0
                setTimeout(() => alert.remove(), 2000); // Menghapus alert setelah transisi selesai
            }
        }, 1500); // Waktu tampil alert selama 1.5 detik
    </script>
    <script>
        // Menghapus alert setelah 1.5 detik dengan efek transisi
        setTimeout(function() {
            const alert = document.getElementById('error-alert');
            if (alert) {
                alert.style.transition = "opacity 0.5s ease"; // Efek transisi
                alert.style.opacity = 0; // Mengurangi opasitas menjadi 0
                setTimeout(() => alert.remove(), 2000); // Menghapus alert setelah transisi selesai
            }
        }, 1500); // Waktu tampil alert selama 1.5 detik
    </script>
@endpush
