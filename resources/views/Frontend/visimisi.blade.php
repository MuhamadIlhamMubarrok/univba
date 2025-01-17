@section('title', 'Visi Misi')
@extends('Frontend.Layouts.app2')
@section('content')
    <x-header-section-page title="Visi Misi Universitas Kepanjen" breadcrumb-home="Home" breadcrumb-current="Visi Misi" />

    <!-- Content Section -->
    <div class=" py-10 ">
        <div data-aos="fade-up" class="container mx-auto px-4 lg:px-16 space-y-12">
            <!-- Visi -->
            <div data-aos="fade-up" class="bg-white shadow-xl shadow rounded-lg p-6">
                <h2 data-aos="fade-up" class="text-xl font-poppins font-semibold text-primary mb-3">Visi</h2>
                <p data-aos="fade-up" class="text-gray-700 font-dmsans">
                    Menjadi Sekolah Tinggi Kesehatan yang profesional berbasis masyarakat di tingkat nasional pada tahun
                    2024.
                </p>
            </div>

            <!-- Misi -->
            <div data-aos="fade-up" class="bg-white shadow-xl shadow rounded-lg p-6">
                <h2 data-aos="fade-up" class="text-xl font-poppins font-semibold text-primary mb-3">Misi</h2>
                <ul data-aos="fade-up" class="list-disc pl-5 space-y-3 text-gray-700 font-dmsans">
                    <li>
                        Melaksanakan pendidikan yang profesional dan berdaya saing guna memenuhi tuntutan tenaga kesehatan
                        di tingkat nasional.
                    </li>
                    <li>
                        Melaksanakan penelitian yang profesional berbasis masyarakat.
                    </li>
                    <li>
                        Melaksanakan pengabdian kepada masyarakat yang profesional berbasis masyarakat.
                    </li>
                    <li>
                        Menyediakan sumber daya manusia, sarana, prasarana, dan teknologi informasi untuk mewujudkan
                        tridharma perguruan tinggi yang profesional berbasis masyarakat.
                    </li>
                    <li>
                        Melaksanakan kerjasama dalam negeri dan luar negeri untuk mewujudkan tridharma perguruan tinggi yang profesional berbasis masyarakat.
                    </li>
                    <li>
                        Melaksanakan kerjasama dalam negeri dan luar negeri untuk mewujudkan tridharma perguruan tinggi yang profesional berbasis masyarakat.
                    </li>
                </ul>
            </div>

            <!-- Call to Action -->
            <div data-aos="fade-up" class="text-center shadow-xl">
                <div data-aos="fade-up" class="bg-secondary py-8 rounded-lg">
                    <h2 data-aos="fade-up" class="text-xl font-poppins font-bold text-white mb-3">Bergabunglah Bersama
                        Universitas Kepanjen
                    </h2>
                    <p data-aos="fade-up" class="text-white font-dmsans mb-5">Jadilah bagian dari keluarga besar Universitas
                        Kepanjen,
                        universitas yang berkomitmen untuk memberikan pengalaman akademik terbaik melalui program studi
                        unggulan dan dosen berkompeten.</p>
                    <a href="/pendaftaran" data-aos="fade-up"
                        class="bg-white text-primary font-poppins font-medium py-2 px-6 rounded-full shadow-md hover:bg-gray-100 transition">
                        Daftar Sekarang
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
