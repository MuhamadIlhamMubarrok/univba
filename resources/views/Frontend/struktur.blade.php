@section('title', 'Struktur Organisasi')
@extends('Frontend.Layouts.app2')
@section('content')
    <x-header-section-page title="Struktur Organisasi Universitas Banten" breadcrumb-home="Home"
        breadcrumb-current="Struktur Organisasi" />

    <div data-aos="fade-up" class=" py-16 mt-8 ">
        <div data-aos="fade-up" class="container mx-auto px-4 lg:px-20">

            <!-- Image Section -->
            <div data-aos="fade-up" class="flex justify-center">
                <h1 class="text-[20px] font-poppins uppercase font-bold p-6 rounded-lg shadow-lg">Sedang Maintenance</h1>
                {{-- <img src="{{ asset('images/sambutan/struktur.png') }}" alt="Struktur Organisasi Universitas Banten"
                    data-aos="fade-up" class="shadow-lg rounded-lg w-full md:w-3/4 lg:w-1/2 shadow-xl bg-white p-8"> --}}
            </div>

            <!-- Description Section -->
            <x-join-us-section title="Bergabunglah Bersama Universitas Banten"
                description="Bersama Universitas Banten, bangun bisnis dan karier impianmu!
                Pendidikan berkualitas yang siap membawamu ke puncak."
                buttonText="Daftar Sekarang" />
        </div>
    </div>
@endsection
