@section('title', 'Biaya dan Jurusan')
@extends('Frontend.Layouts.app2')

@section('content')
    <div class="container mx-auto px-4 lg:px-16 py-10 font-poppins">
        <x-header-section-page title="Biaya dan Jurusan Universitas Kepanjen" breadcrumb-home="Home"
            breadcrumb-current="Biaya dan Jurusan" />
        <!-- Biaya Formulir -->
        <div class="swiper mySwiper max-w-[1300px] w-full mt-6">
            <div class="swiper-wrapper space-x-[10px] pb-[20px] md:ps-[20px]">
                <!-- SMA ke S1 -->
                <!-- Loop through sma_ke_s1 data -->
                <?php foreach ($data['sma_ke_s1'] as $program): ?>
                <div
                    class="swiper-slide bg-white shadow-lg rounded-lg p-5 w-full sm:w-[280px] md:w-[320px] flex flex-col space-y-4">
                    <!-- Judul -->
                    <h3 class="text-lg font-semibold text-primary font-poppins">
                        <?= $program['jurusan'] ?> (SMA ke S1)
                    </h3>

                    <!-- Detail Biaya -->
                    <div class="text-sm font-dmsans text-gray-600 space-y-1">
                        <p>Biaya Pendaftaran: <span class="text-primary font-medium">Rp.
                                <?= number_format($data['form_fee'], 0, ',', '.') ?></span></p>
                        <p>Biaya Awal: <span class="text-primary font-medium">Rp.
                                <?= number_format($data['initial_fee']['S1D3'], 0, ',', '.') ?></span></p>
                        <p>Biaya Bulanan: <span class="text-accent font-medium">Rp. <?= $program['spp'] ?></span></p>
                    </div>

                    <!-- Tombol -->
                    <div class="flex justify-between items-center mt-3 gap-3">
                        <a href="/pendaftaran"
                            class="bg-primary hover:bg-secondary text-white font-medium py-2 px-3 rounded-md text-sm transition-all w-full text-center">Daftar
                            Sekarang</a>
                        <a href="/page/14"
                            class="bg-secondary hover:bg-accent text-white font-medium py-2 px-3 rounded-md text-sm transition-all w-full text-center">Info
                            Lanjut</a>
                    </div>
                </div>
                <?php endforeach; ?>

                <!-- D3 ke S1 -->
                <!-- Loop through d3_ke_s1 data -->
                <?php foreach ($data['d3_ke_s1'] as $program): ?>
                <div
                    class="swiper-slide bg-white shadow-lg rounded-lg p-5 w-full sm:w-[280px] md:w-[320px] flex flex-col space-y-4">
                    <!-- Judul -->
                    <h3 class="text-lg font-semibold text-primary font-poppins">
                        <?= $program['jurusan'] ?> (D3 ke S1)
                    </h3>

                    <!-- Detail Biaya -->
                    <div class="text-sm font-dmsans text-gray-600 space-y-1">
                        <p>Biaya Pendaftaran: <span class="text-primary font-medium">Rp.
                                <?= number_format($data['form_fee'], 0, ',', '.') ?></span></p>
                        <p>Biaya Awal: <span class="text-primary font-medium">Rp.
                                <?= number_format($data['initial_fee']['ners'], 0, ',', '.') ?></span></p>
                        <p>Biaya Bulanan: <span class="text-accent font-medium">Rp. <?= $program['spp'] ?></span></p>
                    </div>

                    <!-- Tombol -->
                    <div class="flex justify-between items-center mt-3 gap-3">
                        <a href="/pendaftaran"
                            class="bg-primary hover:bg-secondary text-white font-medium py-2 px-3 rounded-md text-sm transition-all w-full text-center">Daftar
                            Sekarang</a>
                        <a href="/page/14"
                            class="bg-secondary hover:bg-accent text-white font-medium py-2 px-3 rounded-md text-sm transition-all w-full text-center">Info
                            Lanjut</a>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
            <div class="swiper-pagination"></div>
        </div>
        <div data-aos="fade-up" class="text-center shadow-xl mt-8">
            <div data-aos="fade-up" class="bg-secondary py-8 rounded-lg">
                <h2 data-aos="fade-up" class="text-xl font-poppins font-bold text-white mb-3">Ubah Masa Depanmu Bersama
                    Universitas Kepanjen
                </h2>
                <p data-aos="fade-up" class="text-white font-dmsans mb-5">Jangan lewatkan kesempatan emas untuk menjadi
                    mahasiswa Universitas Kepanjen, kampus yang memberikan pendidikan holistik untuk menciptakan lulusan
                    yang siap bersaing
                    global. </p>
                <a href="/pendaftaran" data-aos="fade-up"
                    class="bg-white text-secondary font-poppins font-medium py-2 px-6 rounded-full shadow-md hover:bg-gray-100 transition">
                    Daftar Sekarang
                </a>
            </div>
        </div>
    </div>
@endsection
