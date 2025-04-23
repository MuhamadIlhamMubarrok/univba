@section('title', 'Sejarah')
@extends('Frontend.Layouts.app2')
@section('content')
    <x-header-section-page title="Sejarah Universitas Banten" breadcrumb-home="Home" breadcrumb-current="Sejarah Singkat" />

    <div data-aos="fade-up" class=" flex flex-col my-6 md:my-10 px-4 md:px-20 lg:px-32 xl:px-60">
        <!-- Gambar -->
        {{-- <img src="{{ asset('./images/sambutan/petinggi.png') }}" data-aos="fade-up" class=" mb-5 w-full" alt=""> --}}

        <!-- Konten Teks -->
        <div data-aos="fade-up"
            class="flex flex-col space-y-4 text-justify font-dmsans text-[14px] md:text-[16px] bg-white shadow-xl shadow rounded-lg p-6">
            <p class="first-line:pl-5">
                Universitas Banten didirikan sebagai perguruan tinggi swasta yang berlokasi di kota Serang, Banten.
                Universitas Banten tidak lahir begitu saja. Ia adalah hasil perjuangan dan kerja keras dari pendiri Yayasan
                Pusat Pengembangan Pendidikan Banten, E. Rahmat Taufik, Ph.D. Sejak tahun 2004, STIE Banten telah berdiri
                sebagai lembaga pendidikan tinggi yang mengutamakan kualitas dan relevansi. Namun, dengan visi yang lebih
                besar dan semangat yang tak tergoyahkan, E. Rahmat Taufik, Ph.D memutuskan untuk mengubah STIE Banten
                menjadi Universitas Banten, dengan tujuan untuk menyediakan pendidikan dan penelitian yang lebih baik dan
                lebih luas bagi masyarakat Banten dan Indonesia.
            </p>
            <p class="first-line:pl-5">
                Perubahan bentuk STIE Banten menjadi Universitas Banten tidaklah mudah. , E. Rahmat Taufik, Ph.D dan timnya
                harus melewati berbagai tantangan, mulai dari persiapan administrasi hingga peningkatan kualitas kurikulum
                dan tenaga pengajar. Namun, dengan tekad yang kuat dan semangat yang tak kenal lelah, Universitas Banten
                akhirnya didirikan pada tahun 2022, berdasarkan Surat Keputusan Menteri Pendidikan, Kebudayaan, Riset, Dan
                Teknologi Republik Indonesia dengan Nomor 524/E/O/2022.
            </p>
            <p class="first-line:pl-5">
                Visi Universitas Banten adalah menjadi pusat pengembangan pendidikan dan penelitian yang unggul di Banten
                dan Indonesia. Dalam mencapai visi tersebut, Universitas Banten menawarkan berbagai program studi yang telah
                terakreditasi dan mengutamakan praktik dan aplikasi ilmu pengetahuan. Program studi Akuntansi dan Manajemen
                telah terakreditasi “B”, sementara program studi Hukum, Kesehatan Masyarakat, Teknik Industri, Sistem, dan
                Teknologi Informasi telah terakreditasi “BAIK”. Ini menunjukkan bahwa Universitas Banten memprioritaskan
                kualitas pendidikan yang ditawarkan dan berupaya untuk terus meningkatkannya.
            </p>
            <p class="first-line:pl-5">
                Tidak hanya menawarkan pendidikan berkualitas, Universitas Banten juga berupaya untuk menjadi pusat
                penelitian yang unggul dalam berbagai bidang. Melalui kerja sama dengan berbagai institusi dan perusahaan,
                Universitas Banten menjalin riset dan inovasi yang bermanfaat bagi masyarakat. Universitas Banten berharap
                dapat memberikan solusi untuk permasalahan yang dihadapi oleh masyarakat melalui riset dan inovasi yang
                dilakukan.
            </p>
            <p class="first-line:pl-5">
                Sebagai sebuah perguruan tinggi swasta yang baru didirikan, Universitas Banten telah menunjukkan komitmennya
                untuk mendorong pengembangan masyarakat Banten dan Indonesia melalui pendidikan dan penelitian yang
                berkualitas. Universitas Banten juga telah memperoleh pengakuan dari masyarakat dan lembaga pemerintah
                setempat, seperti Pemprov Banten dan Dinas Pendidikan dan Kebudayaan Provinsi Banten.
            </p>
            <p class="first-line:pl-5">
                Tak hanya itu, Universitas Banten juga memiliki berbagai kegiatan dan program yang bertujuan untuk
                mempererat hubungan antara mahasiswa, dosen, dan masyarakat. Beberapa kegiatan yang diselenggarakan antara
                lain seminar, workshop, dan pelatihan untuk meningkatkan kualitas dan kapasitas sumber daya manusia di
                daerah Banten.
            </p>
            <p class="first-line:pl-5">
                Selain itu, Universitas Banten juga memiliki program kewirausahaan yang bertujuan untuk menciptakan lapangan
                kerja bagi lulusan dan masyarakat sekitar. Program kewirausahaan ini mencakup pelatihan dan bimbingan bagi
                mahasiswa dan masyarakat dalam mengembangkan usaha.


            </p>
            <p class="first-line:pl-5">
                Dengan tekad dan semangat yang menggelora, Universitas Banten terus berupaya untuk meningkatkan kualitas
                pendidikan dan penelitian yang ditawarkannya, serta menjalin kerja sama dengan berbagai pihak untuk mencapai
                tujuan visinya. Universitas Banten siap menjadi pelopor perguruan tinggi swasta yang unggul dan terdepan di
                Banten dan di Indonesia.
            </p>
        </div>

        <!-- Bagian Ajakan -->
        <x-join-us-section title="Bergabunglah Bersama Universitas Banten"
            description="Jadilah pemimpin masa depan! Universitas Banten siap membentuk lulusan berdaya saing tinggi di era digital."
            buttonText="Daftar Sekarang" buttonLink="/pendaftaran" />
    </div>
@endsection
