@extends('Frontend.Layouts.app2')
@section('title', 'Detail-Berita')
@section('content')
    <x-header-section-page title="{{ $berita->judul }}" breadcrumb-home="Home" breadcrumb-current="berita" />
    <div class="bg-gray-50 rounded-lg p-6 shadow-md mt-8 md:mx-[50px] " data-aos="fade-up">
        <img src="{{ asset('./storage/berita/' . $berita->file_foto) }}"
            class="rounded-lg w-full h-auto object-cover object-center" alt="">
        <p class="mt-8 font-dmsans text-[14px] md:text-[16px] lg:text-[18px] " style="text-indent: 30px;" data-aos="fade-up">
            {{ strip_tags($berita->content) }}
        </p>
        <x-join-us-section title="Bergabunglah Bersama Universitas Banten"
            description="Universitas Banten, tempat terbaik membangun karier di dunia bisnis!
                Dapatkan ilmu, keterampilan, dan jaringan untuk sukses."
            buttonText="Daftar Sekarang" />
    </div>
@endsection
