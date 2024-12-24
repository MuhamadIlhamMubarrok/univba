@extends('Frontend.Layouts.app2')
@section('content')
    <x-header-section-page title="Sejarah UPY" breadcrumb-home="Home" breadcrumb-current="Sejarah Singkat" />

    <div class=" flex flex-col my-6 md:my-10 px-4 md:px-20 lg:px-32 xl:px-60">
        <!-- Gambar -->
        <img src="{{ asset('./images/sambutan/petinggi.png') }}" class=" mb-5 w-full" alt="">

        <!-- Konten Teks -->
        <div class="flex flex-col space-y-4 text-justify font-dmsans text-[14px] md:text-[16px]">
            <p>
                Semula Universitas PGRI Yogyakarta (UPY) berbentuk institut (IKIP PGRI Yogyakarta) yang berdiri tanggal 11
                desember 1962 berdasarkan Surat Keputusan Menteri Perguruan Tinggi Dan Ilmu Pengetahuan RI Nomor 44/Swt/P/62
                dalam bentuk Fakultas Keguruan dan Ilmu Pendidikan meliputi jurusan Ilmu Mendidik dan Jurusan Sejarah yang
                berlokasi di SGA Stelladuce (Menumpang) yang berada di kompleks Lapangan Trenggono, Klitren kidul
                Yogyakarta.
                Mulai tahun 1964 kampus FKIP PGRI Yogyakarta (cikal bakal IKIP PGRI Yogyakarta) pindah di SD ungaran,
                kotabaru
                Yogyakarta (Sekarang menjadi SDN Ungaran 2) sampai tahun 1980. Selanjutnya pada tahun 1981 berpindah lagi ke
                kompleks SGPLB di Jl. Wates, Kalibayem Yogyakarta.
            </p>
            <p>
                Berdasarkan Keputusan Menteri Pendidikan dan kebudayaan RI Nomor : 029/0/1981 tanggal 22 januari 1981
                tentang Penetapan Kembali Status Terdaftar bagi PTS di Kopertis Wilayah IV yang menetapkan kembali status
                Terdaftar bagi IKIP PGRI Yogyakarta yang meliputi: Fakultas Ilmu Pendidikan jurusan Teori Dan Sejarah
                Pendidikan dan Fakultas Keguruan Ilmu Sosial jurusan Ilmu Sejarah. Disamping itu juga mengembangkan jurusan
                baru pada Fakultas Ilmu Pendidikan dan membuka jurusan Psikologi Pendidikan dan Bimbingan yang mendapat
                status Terdaftar Berdasarkan Keputusan Menteri Pendidikan dan Kebudayaan Nomor: 0109/O/1984 Tanggal 9 Maret
                1984.
            </p>
            <p>
                Setelah sebelumnya selalu menumpang dengan instansi lain, mulai tahun 1984 dapat menempati kampus milik
                sendiri di kawasan Sonosewu, Ngestiharjo Kasihan Bantul sampai sekarang. Dalam rangka pemenuhan tuntutan
                akan kebutuhan pembangunan, perkembangan ilmu pengetahuan dan teknologi, serta memperhatikan prospek masa
                depan maka sejak tahun 1995 dirilis alih bentuk, dari bentuk Institut Menjadi Universitas dengan Surat
                keputusan dengan nomor : 180/DIKTI/KEP/1997, tertanggal 25 juli 1997, IKIP PGRI Yogyakarta menjadi
                Universitas PGRI Yogyakarta (UPY).
            </p>
        </div>

        <!-- Bagian Ajakan -->
        <div class="flex items-center flex-col pt-10">
            <div class="w-full h-[1px] bg-blue-900 my-4"></div>
            <h1 class="text-center font-poppins text-[20px] md:text-[30px] font-bold text-primary">DAFTAR SEKARANG</h1>
            <p class="text-center mb-5 text-[12px] md:text-[14px] lg:text-[16px]">
                Raih masa depan gemilang dengan pendidikan berkualitas dari universitas yang telah dipercaya selama
                bertahun-tahun. UPY menghadirkan program studi unggulan, dosen berpengalaman, dan fasilitas modern untuk
                mendukung perjalanan akademik Anda.
            </p>
            <x-button url="/pendaftaran">DAFTAR SEKARANG</x-button>
        </div>
    </div>
@endsection
