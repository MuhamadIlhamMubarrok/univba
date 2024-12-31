@extends('Frontend.Layouts.app2')
@section('content')
    <x-header-section-page title="Sejarah UPY" breadcrumb-home="Home" breadcrumb-current="Sejarah Singkat" />

    <div data-aos="fade-up" class=" flex flex-col my-6 md:my-10 px-4 md:px-20 lg:px-32 xl:px-60">
        <!-- Gambar -->
        <img src="{{ asset('./images/sambutan/petinggi.png') }}" data-aos="fade-up" class=" mb-5 w-full" alt="">

        <!-- Konten Teks -->
        <div data-aos="fade-up" class="flex flex-col space-y-4 text-justify font-dmsans text-[14px] md:text-[16px]">
            <p>
                Pada tanggal 03 Pebruari 1997 telah didirikan Yayasan Mulia Darma dengan Akte Notaris Alia Ghani, SH, No.02 dan Akte Yayasan Mulia Darma Pratama Palembang, No.12 Tahun 2014 yang disahkan oleh Keputusan Menkumhan R.I Nomor:AHU-2978.AH.01.04 Tahun 2014. Maksud dan tujuan didirikannya Yayasan ini antara lain untuk turut serta secara aktif membantu Pemerintah dalam melaksanakan program pembangunan nasional, khususnya dibidang Pendidikan Tinggi, dalam rangka mewujudkan cita-cita nasional yaitu masyarakat adil dan makmur berdasarkan Pancasila dan UUD 1945. Mengingat sarana dan prasarana yang dimiliki Yayasan Mulia Darma Palembang sudah cukup memadai untuk menyelenggarakan suatu program pendidikan tinggi di Sumatera Selatan, maka didirikanlah Sekolah Tinggi Ilmu Ekonomi (STIE) Mulia Darma Pratama berdasarkan SK. MENDIKBUD RI, Nomor: 097/D/0/1999 tanggal 01 Juni 1999, dengan mendapat status “TERDAFTAR” untuk kedua Program Studi Manajemen (S-1), serta Program Studi Akuntansi (D3) dan pada tahun 2009 telah dibuka program studi Akuntansi (S-1) melalui Surat DIRJEN DIKTI Nomor : 900/D/T/2009 tanggal 11 Juni 2009.
            </p>
            <p>
                SEJARAH SINGKAT AKADEMI KEUANGAN DAN PERBANKAN MULIA DARMA PRATAMA Pada tanggal 03 Pebruari 1997 telah didirikan Yayasan Mulia Darma dengan Akte Notaris Alia Ghani, SH, No.02. Maksud dan tujuan didirikannya Yayasan ini antara lain untuk turut serta secara aktif membantu Pemerintah dalam melaksanakan program pembangunan nasional, khususnya dibidang Pendidikan Tinggi, dalam rangka mewujudkan cita-cita nasional yaitu masyarakat adil dan makmur berdasarkan Pancasila dan UUD 1945. Mengingat sarana dan prasarana yang dimiliki yayasan sudah cukup memadai untuk menyelenggarakan suatu program pendidikan tinggi di Sumatera Selatan, maka didirikanlah Akademi Keuangan dan Perbankan (AKUBANK) Mulia Darma Pratama berdasarkan SK. MENDIKBUD RI, Nomor : 031/D/0/1997 tanggal 03 Juni 1997, dengan mendapat status “TERDAFTAR” untuk kedua program studi Keuangan dan Perbankan, Akuntansi Perbankan.
            </p>
        </div>

        <!-- Bagian Ajakan -->
        <div data-aos="fade-up" class="flex items-center flex-col pt-10">
            <div data-aos="fade-up" class="w-full h-[1px] bg-blue-900 my-4"></div>
            <h1 data-aos="fade-up" class="text-center font-poppins text-[20px] md:text-[30px] font-bold text-primary">DAFTAR
                SEKARANG</h1>
            <p data-aos="fade-up" class="text-center mb-5 text-[12px] md:text-[14px] lg:text-[16px]">
                Raih masa depan gemilang dengan pendidikan berkualitas dari universitas yang telah dipercaya selama
                bertahun-tahun. Muliadarma menghadirkan program studi unggulan, dosen berpengalaman, dan fasilitas modern untuk
                mendukung perjalanan akademik Anda.
            </p>
            <x-button url="/pendaftaran">DAFTAR SEKARANG</x-button>
        </div>
    </div>
@endsection
