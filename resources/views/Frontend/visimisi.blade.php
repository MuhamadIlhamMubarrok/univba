@section('title', 'Visi Misi')
@extends('Frontend.Layouts.app2')
@section('content')
    <x-header-section-page title="Visi Misi Universitas Banten" breadcrumb-home="Home" breadcrumb-current="Visi Misi" />

    <!-- Content Section -->
    <div class=" py-10 ">
        <div data-aos="fade-up" class="container mx-auto px-4 lg:px-16 space-y-12">
            <!-- Visi -->
            <div data-aos="fade-up" class="bg-white shadow-xl shadow rounded-lg p-6">
                <h2 data-aos="fade-up" class="text-xl font-poppins font-semibold text-primary mb-3">Visi</h2>
                <p data-aos="fade-up" class="text-gray-700 font-dmsans">
                    “Menjadi universitas unggul, inovatif dan berdaya saing pada tahun 2027”
                </p>
            </div>

            <!-- Misi -->
            <div data-aos="fade-up" class="bg-white shadow-xl shadow rounded-lg p-6">
                <h2 data-aos="fade-up" class="text-xl font-poppins font-semibold text-primary mb-3">Misi</h2>
                <ul data-aos="fade-up" class="list-disc pl-5 space-y-3 text-gray-700 font-dmsans">
                    <li>Menyelenggarakan tata kelola perguruan tinggi yang baik (good university governance);
                    </li>
                    <li>
                        Menyelenggarakan Pendidikan bermutu untuk menghasilkan lulusan yang memiliki daya saing;
                    </li>
                    <li>
                        Menyelenggarakan serta meningkatkan Kualitas dan Kuantitas Penelitian dan Pengabdian kepada
                    </li>
                    <li>
                        Masyarakat yang inovatif berbasis pada kebutuhan masyarakat dan Perkembangan Jaman;
                    </li>
                    <li> Menyelenggarakan dan meningkatkan kerjasama yang saling menguntungkan dengan berbagai pihak baik di
                        dalam maupun luar negeri.</li>
                </ul>
            </div>
            <!-- Tujuan -->
            <div data-aos="fade-up" class="bg-white shadow-xl shadow rounded-lg p-6">
                <h2 data-aos="fade-up" class="text-xl font-poppins font-semibold text-primary mb-3">Tujuan</h2>
                <ul data-aos="fade-up" class="list-disc pl-5 space-y-3 text-gray-700 font-dmsans">
                    <li>Menghasilkan tata kelola yang efektif, efisien, transparan dan akuntabel dalam mengembangkan
                        Tridharma Perguruan Tinggi
                    </li>
                    <li>
                        Menghasilkan lulusan yang berkualitas dan berdaya saing dalam menghadapi persaingan kerja dan
                        berwirausaha
                    </li>
                    <li>
                        Menghasilkan penelitian dan pengabdian pada masyarakat yang inovatif dan berbasis pada kebutuhan
                        nyata dan berorientasi pada pemanfaatan oleh pemerintah, dunia usaha/industri dan masyarakat
                    </li>
                    <li>
                        Menghasilkan Pendidikan yang berkualitas;</li>
                    <li>Menghasilkan kualitas dan kuantitas penelitian dan pengabdian kepada masyarakat melalui kerjasama
                        dengan pihak lain, baik di dalam maupun di Luar Negeri.
                    </li>
                </ul>
            </div>

            <!-- Call to Action -->
            <x-join-us-section title="Bergabunglah Bersama Universitas Banten"
                description="Jadilah pengusaha handal bersama Universitas Banten! Kurikulum inovatif siap membentuk jiwa bisnis profesional."
                buttonText="Daftar Sekarang" />
        </div>
    </div>
@endsection
