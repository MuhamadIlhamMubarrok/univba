<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta name="description"
        content="Universitas Banten atau yang biasa dikenal Univ Banten salah satu Perguruan Tinggi Swasta Terbaik di Banten, tersedia kelas karyawan dengan biaya murah dan terjangkau mulai dari Rp 500.000/Bulan dengan jurusan S1 Manajemen, S1 Akuntansi, S1 Hukum, S1 Teknik Industri, S1 Kesehatan Masyarakat, S1 Sistem Teknologi Informasi" />
    <meta name="keywords"
        content="Kelas karyawan, Kuliah karyawan, Universitas Pelita Bangsa, Universitas Esa Unggul, Universitas Mercu Buana, Universitas Terbuka, Universitas Pamulang, Universitas Muhammadiyah Tangerang, Universitas Bina Sarana Informatika, Universitas Islam Syekh Yusuf, Universitas Raharja, Universitas Primagraha, Universitas Pancasila,
         Universitas Insan Pembangunan, Universitas Multimedia Nusantara, Universitas Trisakti, Universitas Budi Luhur, biaya kuliah kelas karyawan, kampus kelas karyawan, kuliah sambil kerja, kelas sabtu minggu, kelas malam, akreditasi universitas, kampus murah, kampus terjangkau, S1 Manajemen, S1 Akuntansi, S1 Hukum, S1 Teknik Industri,
          S1 Kesehatan Masyarakat, S1 Sistem Teknologi Informasi, kuliah online dan offline, kampus Tangerang, kampus Serang, kuliah fleksibel, edunitas.">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <title>@yield('title') &mdash; Universitas Banten(Kelas Karyawan)</title>
    <meta property="og:title" content="Universitas Banten (Kelas Karyawan)">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://univbanten.info/">
    <meta property="og:image" content="https://univbanten.info/images/background/hero1.png">
    <meta property="og:image:width" content="1200" />
    <meta property="og:image:height" content="630" />
    <meta property="og:description"
        content="Universitas Banten adalah perguruan tinggi yang berkomitmen pada pendidikan berkualitas dengan berbagai program studi unggulan. Menyediakan kelas karyawan dan reguler dengan fasilitas modern, tenaga pengajar berpengalaman, serta biaya kuliah yang terjangkau di Banten." />
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:creator" content="@univbanten">
    <meta name="twitter:site" content="@univbanten">
    <meta name="twitter:title" content="Universitas Banten | Pendidikan Pertanian Berkualitas">
    <meta name="twitter:description"
        content="Universitas Banten menawarkan berbagai program studi unggulan dengan pilihan kelas reguler dan kelas karyawan. Dengan fasilitas modern dan biaya kuliah terjangkau, kami mendukung fleksibilitas belajar bagi mahasiswa yang bekerja." />
    <meta name="twitter:domain" content="https://univbanten.info/">
    <meta name="twitter:image:src" content="https://univbanten.info/images/background/hero1.png">
    <meta name="author" content="IT Kuliah Karyawan Team" />
    <meta http-equiv="cache-control" content="public" />
    <meta name="application-name" content="Universitas Banten">
    <meta name="msapplication-TileColor" content="#9E2A61" />
    <meta name="theme-color" content="#9E2A61" />

    <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('images/favicons/apple-icon-57x57.png') }}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('images/favicons/apple-icon-60x60.png') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('images/favicons/apple-icon-72x72.png') }}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('images/favicons/apple-icon-76x76.png') }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('images/favicons/apple-icon-114x114.png') }}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('images/favicons/apple-icon-120x120.png') }}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('images/favicons/apple-icon-144x144.png') }}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('images/favicons/apple-icon-152x152.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('images/favicons/apple-icon-180x180.png') }}">
    <link rel="icon" type="image/png" sizes="192x192"
        href="{{ asset('images/favicons/android-icon-192x192.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('images/favicons/favicons-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('images/favicons/favicons-96x96.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('images/favicons/favicons-16x16.png') }}">
    <link rel="manifest" href="images/favicons/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="images/favicons/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">


    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&family=DM+Sans:wght@400;700&display=swap"
        rel="stylesheet">
    <link href="./css/app.css" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    {{-- swiper --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    {{-- data-aos --}}
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
    {{-- Style --}}
    @stack('prpend-style')
    @stack('addon-style')
    <style>
        #text-page li {
            max-width: 60ch;
            list-style-type: square;
            font-family: 'Poppins', serif;
        }

        #text-page ul,
        #text-page ol {
            margin-left: 20px;
        }

        #text-page p {
            font-family: 'Poppins', serif;
        }

        #text-page h1,
        #text-page h2 {
            font-family: 'Poppins', serif;
            font-size: 20px;
            font-weight: bold;
            color: #4B410E;
        }
    </style>

</head>

<body>

    {{-- Navbar --}}
    @include('Frontend.Template.navbar')

    {{-- Page Content --}}
    <div class="h-auto flex flex-col items-center justify-center md:gap-x-[100px] py-[100px] pt-[150px] px-4 md:px-0 bg-cover bg-no-repeat bg-left md:bg-center-top"
        style="background-image: url('{{ asset('./images/background/sambutan.png') }}');">
        @yield('content')
    </div>

    <div class="fixed flex-row items-center bottom-4 right-4 z-50 md:bottom-10 md:right-10 flex ">
        <!-- Animated WhatsApp Button -->
        <div
            class="slide-text whatsapp-button overflow-hidden transition-all duration-500 ease-in-out bg-[#40C351] h-[40px] py-2 px-4 font-poppins text-white rounded-full mb-2">
            <h1 class="whatsapp-button-text ">ingin bertanya ? yuk di click !</h1>
        </div>

        <!-- WhatsApp Icon -->
        <a href="https://wa.me/6289504586704?text=Halo%20Admin%2C%20saya%20mau%20bertanya%20%0ASumber%20%3A%20{{ url()->current() }}"
            target="_blank" rel="noopener noreferrer">
            <img src="{{ asset('images/logo/wa.jpg') }}" alt="WhatsApp" class="w-12 h-12 md:w-[70px] md:h-[70px]">
        </a>
    </div>



    {{-- Footer --}}
    @include('Frontend.Template.footer')



    {{-- Script --}}
    @stack('prpend-script')
    @stack('addon-script')



    {{-- recaptcha --}}
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    {{-- data-aos --}}
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    {{-- flowbite --}}
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="./js/app.js"></script>
    <script src="./js/daftaronline.js"></script>
    <script src="{{ asset('./js/app.js') }}"></script>
    <script>
        document.addEventListener('contextmenu', function(event) {
            event.preventDefault();
            alert('Right Click Disabled.');
        });
    </script>
</body>

</html>
