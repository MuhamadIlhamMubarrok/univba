<!DOCTYPE html>
<html lang="en">

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

    {{-- flowbite --}}
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.css" rel="stylesheet" />

    <!-- Add Poppins font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp,container-queries"></script>
</head>

<body class="font-poppins h-screen flex items-center justify-center bg-cover bg-center">
    @yield('content')

    {{-- flowbite --}}
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>
    <!-- Font Awesome for icons (used for Twitter icon) -->
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

    {{-- Tempatkan stack scripts --}}
    @stack('scripts')
</body>

</html>
