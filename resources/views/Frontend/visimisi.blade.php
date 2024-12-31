@extends('Frontend.Layouts.app2')
@section('content')
    <x-header-section-page title="Visi Misi Mulia Darma Pratama" breadcrumb-home="Home" breadcrumb-current="Visi Misi" />

    <!-- Content Section -->
    <div class=" py-10 ">
        <div data-aos="fade-up" class="container mx-auto px-4 lg:px-16 space-y-12">
            <!-- Visi -->
            <div data-aos="fade-up" class="bg-white shadow-xl shadow rounded-lg p-6">
                <h2 data-aos="fade-up" class="text-xl font-poppins font-semibold text-primary mb-3">Visi</h2>
                <p data-aos="fade-up" class="text-gray-700 font-dmsans">
                    Menjadi Perguruan Tinggi Yang Unggul, Kompetitif dan Inovatif Secara Global pada Tahun 2028.
                </p>
            </div>

            <!-- Misi -->
            <div data-aos="fade-up" class="bg-white shadow-xl shadow rounded-lg p-6">
                <h2 data-aos="fade-up" class="text-xl font-poppins font-semibold text-primary mb-3">Misi</h2>
                <ul data-aos="fade-up" class="list-disc pl-5 space-y-3 text-gray-700 font-dmsans">
                    <li>
                        Menyelenggarakan pendidikan yang berkualitas dalam upaya menghasilkan SDM berkemampuan akademik dibidang Manajemen dan Akuntansi yang mandiri, unggul serta berwawasan global.
                    </li>
                    <li>
                        Melaksanakan penelitian dibidang Manajemen dan Akuntansi serta menyebarluaskan hasilnya untuk pengembangan keilmuan dan pengetahuan.
                    </li>
                    <li>
                        Melaksanakan kegiatan pengabdian pada masyarakat dibidang Manajemen dan Akuntansi melalui pemanfaatan ilmu pengetahuan dan teknologi.
                    </li>
                </ul>
            </div>

            <!-- Call to Action -->
            <div data-aos="fade-up" class="text-center shadow-xl">
                <div data-aos="fade-up" class="bg-accent py-8 rounded-lg">
                    <h2 data-aos="fade-up" class="text-xl font-poppins font-bold text-white mb-3">Bergabunglah Bersama Mulia Darma Pratama
                    </h2>
                    <p data-aos="fade-up" class="text-white font-dmsans mb-5">Ciptakan masa depan gemilang dengan Mulia Darma Pratama.</p>
                    <a href="/pendaftaran" data-aos="fade-up"
                        class="bg-white text-primary font-poppins font-medium py-2 px-6 rounded-full shadow-md hover:bg-gray-100 transition">
                        Daftar Sekarang
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
