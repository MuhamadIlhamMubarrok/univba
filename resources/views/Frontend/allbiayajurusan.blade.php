@section('title', 'Biaya dan Jurusan')
@extends('Frontend.Layouts.app2')

@section('content')
    <div class="container mx-auto px-4 lg:px-16 py-10 font-poppins">
        <x-header-section-page title="Biaya dan Jurusan Universitas Banten" breadcrumb-home="Home"
            breadcrumb-current="Biaya dan Jurusan" />
        <!-- Biaya Formulir -->
        <div class="swiper mySwiper max-w-[1300px] w-full mt-6">
            <div class="swiper-wrapper space-x-[10px] pb-[20px] md:ps-[20px]">
                <!-- SMA ke S1 -->
                <!-- Loop through s1 kelas reguler -->
                @foreach ($data['s1'] as $program)
                    <div
                        class="swiper-slide bg-white shadow-lg rounded-lg p-5 w-full sm:w-[280px] md:w-[320px] flex flex-col space-y-4">
                        <!-- Judul -->
                        <h3 class="text-lg font-semibold text-primary font-poppins">
                            <?= $program['jurusan'] ?>
                        </h3>

                        <!-- Detail Biaya -->
                        <div class="text-sm font-dmsans text-gray-600 space-y-1">
                            <p>Biaya Pendaftaran: <span class="text-primary font-medium">Rp.
                                    <?= number_format($data['form_fee']['s1'], 0, ',', '.') ?></span></p>
                            <p>Biaya Awal: <span class="text-primary font-medium">Rp.
                                    <?= $program['b_awal'] ?></span></p>
                            <p>Biaya Bulanan: <span class="text-accent font-medium">Rp. <?= $program['spp'] ?></span></p>
                        </div>

                        <!-- Tombol -->
                        <div class="flex justify-between items-center mt-3 gap-3">
                            <a href="/pendaftaran"
                                class="bg-gradient-to-r from-[#E5C324] to-[#000000] hover:bg-gradient-to-br text-white font-medium py-2 px-3 rounded-md text-sm transition-all w-full text-center">Daftar
                                Sekarang</a>
                            <a href="/brosur"
                                class="bg-secondary hover:bg-accent text-white font-medium py-2 px-3 rounded-md text-sm transition-all w-full text-center">Info
                                Lanjut</a>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="swiper-pagination"></div>
        </div>
        <x-join-us-section title="Bergabunglah Bersama Universitas Banten"
            description="Universitas Banten, mencetak generasi unggul! Persiapkan diri menghadapi persaingan global dengan pendidikan berkualitas."
            buttonText="Daftar Sekarang" />
    </div>
@endsection
