@section('title', 'Sejarah')
@extends('Frontend.Layouts.app2')
@section('content')
    <x-header-section-page title="Sejarah Universitas Kepanjen" breadcrumb-home="Home" breadcrumb-current="Sejarah Singkat" />

    <div data-aos="fade-up" class=" flex flex-col my-6 md:my-10 px-4 md:px-20 lg:px-32 xl:px-60">
        <!-- Gambar -->
        {{-- <img src="{{ asset('./images/sambutan/petinggi.png') }}" data-aos="fade-up" class=" mb-5 w-full" alt=""> --}}

        <!-- Konten Teks -->
        <div data-aos="fade-up"
            class="flex flex-col space-y-4 text-justify font-dmsans text-[14px] md:text-[16px] bg-white shadow-xl shadow rounded-lg p-6">
            <p class="first-line:pl-5">
                Awal berdirinya Sekolah Tinggi Ilmu Kesehatan Kepanjen (STIKES Kepanjen) dimulai dari pengembangan Sekolah
                Perawat Kesehatan (SPK) Kepanjen. SPK Kepanjen berdiri pada 1 Oktober 1985 yang diawali dari kelas Ekstensi
                SPK Depkes Celaket Malang yang penyelenggaraannya dibawah pembinaan Rumah Sakit Umum Kanjuruhan Kepanjen,
                sehingga fasilitas, tenaga, maupun sarana dan prasarana penunjangnya dibantu oleh Rumah Sakit Umum
                Kanjuruhan Kepanjen.
            </p>
            <p>
                SPK Kepanjen secara resmi mendapatkan perijinan operasionalnya dari Menteri Kesehatan RI Nomor:
                111/Kep/DIKNAKES/VII/88 dan Surat Keputusan Bupati Dati II Malang, Nomor: 151/1987. Berkembangnya SPK dari
                tahun 1985 sampai 1998 dicapai tidak lepas dari peranan dan tugas Ketua SPK, pembinaan dari Bapak Bupati
                Malang dan Kanwil Depkes Propinsi Jawa Timur. SPK Kepanjen mengalami beberapa pergantian kepemimpinan antara
                lain selaku Ketua Sekolah adalah dr. Ibnu Fajar (1985-1989), dr. Tuti Hariyanto, MARS (1989-1992), dr.
                Susilowati (1992-1998). Dengan dituntutnya perkembangan pendidikan tenaga kesehatan yang menuntut
                peningkatan jenjang pendidikan bagi tenaga profesi keperawatan maka atas dasar persyaratan akreditasi pada
                tahun 1998 status SPK Kepanjen telah menjadi Akademi Keperawatan Kabupaten Malang, berdasarkan Surat
                Keputusan Ketua Pusat Pendidikan Tenaga Kesehatan Republik Indonesia Nomor: HK.00.06.1.3.5641 tanggal 23
                Oktober 1998 dengan status kelembagaan pendidikan dibawah pembinaan Pemerintah Kabupaten Malang yang
                dipimpin oleh Drs. Driatmojo, Bsc., MBA, MM (1998-2001), Yudiono, S.Kp., M.Kes. (2001-2008), Wiwit
                Kurniawati, M.Kep., Sp.Mat. (2008-20010), dan H. dr. Abdurrachman, M.Kes. (2010-sekarang).
            </p>
            <p>
                Berdasarkan SK Mendiknas No. 259/D/O/2008 tanggal 23 Desember 2008, AKPER Kabupaten Malang berubah menjadi
                Sekolah Tinggi Ilmu Kesehatan (STIKES) Kepanjen yang diresmikan oleh Bapak Bupati Malang tanggal 25 Juli
                2009. Saat ini STIKES Kepanjen mempunyai 2 Program Studi yaitu S1 Keperawatan dan DIII Keperawatan.
            </p>


        </div>

        <!-- Bagian Ajakan -->
        <div data-aos="fade-up" class="flex items-center flex-col pt-10">
            <div data-aos="fade-up" class="w-full h-[1px] bg-primary my-4"></div>
            <h1 data-aos="fade-up" class="text-center font-poppins text-[20px] md:text-[30px] font-bold text-primary">DAFTAR
                SEKARANG</h1>
            <p data-aos="fade-up" class="text-center mb-5 text-[12px] md:text-[14px] lg:text-[16px]">
                Bergabunglah dengan Universitas Kepanjen dan temukan pendidikan berkualitas yang akan
                membimbingmu
                menuju masa depan yang cemerlang dan penuh prestasi.
            </p>
            <x-button url="/pendaftaran">DAFTAR SEKARANG</x-button>
        </div>
    </div>
@endsection
