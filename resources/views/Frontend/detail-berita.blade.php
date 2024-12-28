@extends('Frontend.Layouts.app2')
@section('content')
    <x-header-section-page title="{{ $berita->judul }}" breadcrumb-home="Home" breadcrumb-current="berita" />
    <div class="bg-gray-50 rounded-lg p-6 shadow-md mt-8 md:mx-[50px] " data-aos="fade-up">
        <img src="{{ asset('./storage/berita/' . $berita->file_foto) }}"
            class="rounded-lg w-full h-auto object-cover object-center" alt="">
        <p class="mt-8 font-dmsans text-[14px] md:text-[16px] lg:text-[18px] " style="text-indent: 30px;" data-aos="fade-up">
            {{ strip_tags($berita->content) }}
        </p>
        <div data-aos="fade-up" class="flex items-center flex-col pt-10">
            <div data-aos="fade-up" class="w-full h-[1px] bg-blue-900 my-4"></div>
            <h1 data-aos="fade-up" class="text-center font-poppins text-[20px] md:text-[30px] font-bold text-primary">
                DAFTAR SEKARANG
            </h1>
            <p data-aos="fade-up" class="text-center mb-5 text-[12px] md:text-[14px] lg:text-[16px]">
                Wujudkan impian masa depan dengan pendidikan berkualitas dari universitas yang sudah teruji. UPY hadir
                dengan program studi terbaik, dosen profesional, dan fasilitas modern yang mendukung kemajuan akademik Anda.
            </p>
            <x-button url="/pendaftaran">DAFTAR SEKARANG</x-button>
        </div>
    </div>
@endsection
