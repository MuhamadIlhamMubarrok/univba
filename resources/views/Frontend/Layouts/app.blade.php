<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta name="description" content="Mulia Darma Pratama atau yang biasa dikenalz MDP salah satu Perguruan Tinggi Swasta Terbaik di Palembang, tersedia kelas karyawan dengan biaya murah dan terjangkau mulai dari Rp 510.000/Bulan dengan jurusan D3 Keuangan dan Perbankan, S1 Manajemen dan S1 Akuntansi" />
    <meta name="keywords" content="Kelas karyawan, Kuliah karyawan, Mulia Darma Pratama, kampus Mulia Darma Pratama Palembang, biaya kuliah kampus STIE MDP Palembang, biaya kuliah, kelas sabtu, akreditasi STIE MDP Palembang, kelas karyawan terjangkau Pekanbaru, S1 Manajemen, S1 Akuntansi, D3 Keuangan dan Perbankan kampus murah, kampus palembang,AkuBank Mulia Darma Pratama, kampus AkuBank Mulia Darma Pratama Palembang, biaya kuliah kampus AkuBank MDP Palembang, biaya kuliah, kelas sabtu, akreditasi AkuBank MDP Palembang." />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    
    <title>Mulia Darma Pratama (Kelas Karyawan)</title>
    <meta property="og:title" content="Mulia Darma Pratama (Kelas Karyawan)">
    <meta property="og:type" content="website">
    <meta property="og:url" content="muliadarma.info">
    <meta property="og:image" content="https://stie.muliadarma.info/images/banner-slider/Banner-stiemuliadarma.png">
    <meta property="og:image:width" content="1200" />
    <meta property="og:image:height" content="630" />
    <meta property="og:description" content="Mulia Darma Pratama atau yang biasa dikenal STIE MDP salah satu Perguruan Tinggi Swasta Terbaik di Palembang, tersedia kelas karyawan dengan biaya murah dan terjangkau mulai dari Rp 510.000/Bulan dengan jurusan D3 Keuangan dan Perbankan, S1 Manajemen dan S1 Akuntansi">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:creator" content="@_kuliahkaryawan">
    <meta name="twitter:site" content="@_kuliahkaryawan">
    <meta name="twitter:title" content="Mulia Darma Pratama (Kelas Karyawan)">
    <meta name="twitter:description" content="Mulia Darma Pratama atau yang biasa dikenal MDP salah satu Perguruan Tinggi Swasta Terbaik di Palembang, tersedia kelas karyawan dengan biaya murah dan terjangkau mulai dari Rp 510.000/Bulan dengan jurusan D3 Keuangan dan Perbankan, S1 Manajemen dan S1 Akuntansi">
    <meta name="twitter:domain" content="muliadarma.info">
    <meta name="twitter:image:src" content="https://stie.muliadarma.info/images/banner-slider/Banner-stiemuliadarma.png">
    <meta name="author" content="Kuliah Karyawan Team" />
    <meta http-equiv="cache-control" content="public" />
    <meta name="application-name" content="Mulia Darma Pratama | Kuliah Karyawan (K2)" />


    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&family=DM+Sans:wght@400;700&display=swap"
        rel="stylesheet">
    <link href="./css/app.css" rel="stylesheet">
    {{-- swiper --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    {{-- data-aos --}}
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">

    {{-- Style --}}
    @stack('prpend-style')
    @stack('addon-style')

</head>

<body>

    {{-- Navbar --}}
    @include('Frontend.Template.navbar')

    {{-- Page Content --}}
    @yield('content')
    <div class="fixed flex-row items-center bottom-4 right-4 z-50 md:bottom-10 md:right-10 flex ">
        <!-- Animated WhatsApp Button -->
        <div
            class="slide-text whatsapp-button overflow-hidden shadow-2xl transition-all duration-500 ease-in-out bg-[#40C351] h-[40px] py-2 px-4 font-poppins text-white rounded-full mb-2">
            <h1 class="whatsapp-button-text ">ingin bertanya ? yuk di click !</h1>
        </div>

        <!-- WhatsApp Icon -->
        <a href="https://wa.me/6287890198284?text=Halo%20Admin%2C%20saya%20mau%20bertanya%20%0ASumber%20%3A%20{{ url()->current() }}"
            target="_blank" rel="noopener noreferrer">
            <img src="{{ asset('images/logo/wa.jpg') }}" alt="WhatsApp" class="w-12 h-12 md:w-[70px] md:h-[70px]">
        </a>

    </div>

    {{-- Footer --}}
    @include('Frontend.Template.footer')

    {{-- Script --}}
    @stack('prpend-script')
    @stack('addon-script')
    </script>
    {{-- data-aos --}}
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    {{-- flowbite --}}
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="./js/app.js"></script>
</body>

</html>
