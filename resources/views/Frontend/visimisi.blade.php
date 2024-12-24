@extends('Frontend.Layouts.app2')
@section('content')
    <x-header-section-page title="Visi Misi UPY" breadcrumb-home="Home" breadcrumb-current="Visi Misi" />

    <!-- Content Section -->
    <div class=" py-10 ">
        <div class="container mx-auto px-4 lg:px-16 space-y-12">
            <!-- Visi -->
            <div class="bg-white shadow-xl shadow rounded-lg p-6">
                <h2 class="text-xl font-poppins font-semibold text-primary mb-3">Visi</h2>
                <p class="text-gray-700 font-dmsans">
                    Pada tahun 2043 UPY menjadi perguruan tinggi unggul, menghasilkan lulusan yang bertaqwa,
                    profesional, inovatif, memiliki komitmen nasional, dan berwawasan global.
                </p>
            </div>

            <!-- Misi -->
            <div class="bg-white shadow-xl shadow rounded-lg p-6">
                <h2 class="text-xl font-poppins font-semibold text-primary mb-3">Misi</h2>
                <ul class="list-disc pl-5 space-y-3 text-gray-700 font-dmsans">
                    <li>
                        Mengembangkan tata kelola kelembagaan yang efektif, efisien, demokratis, transparan, dan akuntabel
                        untuk mewujudkan organisasi yang sehat, otonom, dan mempunyai daya saing yang tinggi.
                    </li>
                    <li>
                        Mengoptimalkan pendayagunaan sumberdaya untuk mendukung:
                        <ul class="list-decimal ml-6 mt-2 space-y-2">
                            <li>
                                Penyelenggaraan pendidikan yang menghasilkan lulusan bertaqwa, profesional, inovatif,
                                memiliki
                                komitmen nasional, dan berwawasan global.
                            </li>
                            <li>
                                Penyelenggaraan penelitian untuk mengembangkan ilmu pengetahuan, teknologi, dan seni.
                            </li>
                            <li>
                                Penyelenggaraan kegiatan pengabdian kepada masyarakat untuk kesejahteraan umat.
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>

            <!-- Call to Action -->
            <div class="text-center shadow-xl">
                <div class="bg-accent py-8 rounded-lg">
                    <h2 class="text-xl font-poppins font-bold text-white mb-3">Bergabunglah Bersama UPY</h2>
                    <p class="text-white font-dmsans mb-5">Ciptakan masa depan gemilang dengan UPY.</p>
                    <a href="/pendaftaran"
                        class="bg-white text-primary font-poppins font-medium py-2 px-6 rounded-full shadow-md hover:bg-gray-100 transition">
                        Daftar Sekarang
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
