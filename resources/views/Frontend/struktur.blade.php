@extends('Frontend.Layouts.app2')
@section('content')
    <x-header-section-page title="Struktur Organisasi UPY" breadcrumb-home="Home" breadcrumb-current="Struktur Organisasi" />

    <div data-aos="fade-up" class=" py-16 mt-8 ">
        <div data-aos="fade-up" class="container mx-auto px-4 lg:px-20">

            <!-- Image Section -->
            <div data-aos="fade-up" class="flex justify-center">
                <img src="{{ asset('./images/image/upy.png') }}" alt="Struktur Organisasi UPY" data-aos="fade-up"
                    class="shadow-lg rounded-lg w-full md:w-3/4 lg:w-1/2 shadow-xl">
            </div>

            <!-- Description Section -->
            <div data-aos="fade-up"
                class="mt-12 text-center px md:px-[300px] space-y-4 flex justify-center items-center flex-col">
                <div data-aos="fade-up" class="w-full h-[1px] bg-blue-900 my-4"></div>
                <p data-aos="fade-up" class="text-gray-700 font-dmsans leading-relaxed text-center ">
                    Struktur organisasi Universitas PGRI Yogyakarta dirancang untuk menciptakan sinergi antar unit,
                    menjamin tata kelola yang transparan, dan mendukung pencapaian visi UPY untuk menjadi perguruan tinggi
                    unggul.
                </p>
                <x-button url="/pendaftaran">DAFTAR SEKARANG</x-button>
            </div>
        </div>
    </div>
@endsection
