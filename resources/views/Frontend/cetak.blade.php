<!DOCTYPE html>
<html lang="id">

<head>
    <!-- Meta tags -->
    <meta charset="utf-8">
    <meta name="description" content="Mulia Darma Pratama Pratama atau yang biasa dikenal AkuBank MDP salah satu Perguruan Tinggi Swasta Terbaik di Palembang, tersedia kelas karyawan dengan biaya murah dan terjangkau mulai dari Rp 600.000/Bulan dengan jurusan S1 Manajemen dan S1 Akuntansi" />
    <meta name="keywords" content="Kelas karyawan, Kuliah karyawan, Mulia Darma Pratama Pratama, kampus Mulia Darma Pratama Pratama Palembang, biaya kuliah kampus AkuBank MDP Palembang, biaya kuliah, kelas sabtu, akreditasi AkuBank MDP Palembang, kelas karyawan terjangkau Pekanbaru, S1 Manajemen, S1 Akuntansi, kampus murah, kampus palembang." />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    
    <title>Mulia Darma Pratama Pratama (Kelas Karyawan)</title>
    <meta property="og:title" content="Mulia Darma Pratama Pratama (Kelas Karyawan)">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://muliadarma.info">
    <meta property="og:image" content="https://muliadarma.info/images/banner-slider/Banner-AkuBankmuliadarma.png">
    <meta property="og:image:width" content="1200" />
    <meta property="og:image:height" content="630" />
    <meta property="og:description" content="Mulia Darma Pratama Pratama atau yang biasa dikenal AkuBank MDP salah satu Perguruan Tinggi Swasta Terbaik di Palembang, tersedia kelas karyawan dengan biaya murah dan terjangkau mulai dari Rp 600.000/Bulan dengan jurusan S1 Manajemen dan S1 Akuntansi">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:creator" content="@_kuliahkaryawan">
    <meta name="twitter:site" content="@_kuliahkaryawan">
    <meta name="twitter:title" content="Mulia Darma Pratama Pratama (Kelas Karyawan)">
    <meta name="twitter:description" content="Mulia Darma Pratama Pratama atau yang biasa dikenal AkuBank MDP salah satu Perguruan Tinggi Swasta Terbaik di Palembang, tersedia kelas karyawan dengan biaya murah dan terjangkau mulai dari Rp 600.000/Bulan dengan jurusan S1 Manajemen dan S1 Akuntansi">
    <meta name="twitter:domain" content="muliadarma.info">
    <meta name="twitter:image:src" content="https://muliadarma.info/images/banner-slider/Banner-AkuBankmuliadarma.png">
    <meta name="author" content="Kuliah Karyawan Team" />
    <meta http-equiv="cache-control" content="public" />
    <meta name="application-name" content="Mulia Darma Pratama Pratama | Kuliah Karyawan (K2)" />


    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&family=DM+Sans:wght@400;700&display=swap"
        rel="stylesheet">
    <link href="./css/app.css" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    {{-- swiper --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    {{-- Style --}}
    @stack('prpend-style')
    @stack('addon-style')

</head>

<body>

    <div class="bg-gray-50 py-10">
        <div class="container mx-auto max-w-screen-lg bg-white shadow-lg rounded-lg p-8">
            <div class="text-center border-b-4 border-primary pb-4">
                <img class="w-40 mx-auto mb-4" src="{{ asset('./images/logo/footer-muliadarma.png') }}" alt="Mulia Darma Pratama Logo">
                <h2 class="text-2xl font-poppins font-bold text-primary">
                    FORMULIR PENDAFTARAN
                    <br>CALON MAHASISWA BARU Mulia Darma Pratama
                </h2>
            </div>

            <div class="mt-6">
                <table class="w-full text-sm font-dmsans text-primary">
                    <!-- Nomor Pendaftaran -->
                    <tr>
                        <td class="py-2 font-medium">Nomor Pendaftaran</td>
                        <td>:</td>
                        <td class="text-accent font-semibold">PO_{{ $data->daftar_id }}</td>
                    </tr>
                    <tr>
                        <td class="py-2 font-medium">Perguruan Tinggi</td>
                        <td>:</td>
                        <td>Mulia Darma Pratama</td>
                    </tr>
                    <tr>
                        <td class="py-2 font-medium">Jurusan</td>
                        <td>:</td>
                        <td>{{ $data->jurusan }}</td>
                    </tr>
                    <tr>
                        <td class="py-2 font-medium">Wawancara Via</td>
                        <td>:</td>
                        <td>{{ $data->no_hp }}</td>
                    </tr>
                </table>
            </div>

            <div class="mt-8">
                <h3 class="text-lg font-semibold text-primary border-b pb-2">DATA PRIBADI</h3>
                <table class="w-full mt-4 text-sm font-dmsans text-primary">
                    <tr>
                        <td class="py-2 font-medium">Nama</td>
                        <td>:</td>
                        <td class="text-accent font-semibold">{{ $data->nama_leng }}</td>
                    </tr>
                    <tr>
                        <td class="py-2 font-medium">Jenis Kelamin</td>
                        <td>:</td>
                        <td>{{ $data->j_kel == 'L' ? 'Laki-laki' : 'Perempuan' }}</td>
                    </tr>
                    <tr>
                        <td class="py-2 font-medium">Tempat Lahir</td>
                        <td>:</td>
                        <td>{{ $data->tmpt_lahir }}</td>
                    </tr>
                    <tr>
                        <td class="py-2 font-medium">Tanggal Lahir</td>
                        <td>:</td>
                        <td>{{ $data->tgl_lahir }}</td>
                    </tr>
                    <tr>
                        <td class="py-2 font-medium">Nama Ibu Kandung</td>
                        <td>:</td>
                        <td>{{ $data->ibu }}</td>
                    </tr>
                    <tr>
                        <td class="py-2 font-medium">Alamat Surat/Rumah</td>
                        <td>:</td>
                        <td>{{ $data->al_dom }}</td>
                    </tr>
                    <tr>
                        <td class="py-2 font-medium">Nomor Telepon</td>
                        <td>:</td>
                        <td>{{ $data->no_hp }}</td>
                    </tr>
                    <tr>
                        <td class="py-2 font-medium">Nomor WhatsApp</td>
                        <td>:</td>
                        <td>{{ $data->no_wa }}</td>
                    </tr>
                    <tr>
                        <td class="py-2 font-medium">Email</td>
                        <td>:</td>
                        <td>{{ $data->email }}</td>
                    </tr>
                </table>
            </div>

            <div class="mt-8">
                <h3 class="text-lg font-semibold text-primary border-b pb-2">DATA PENDIDIKAN</h3>
                <table class="w-full mt-4 text-sm font-dmsans text-primary">
                    <tr>
                        <td class="py-2 font-medium">Asal Lulusan</td>
                        <td>:</td>
                        <td>{{ $data->lulusan }}</td>
                    </tr>
                    <tr>
                        <td class="py-2 font-medium">Nama Sekolah</td>
                        <td>:</td>
                        <td>{{ $data->sekolah }}</td>
                    </tr>
                </table>
            </div>

            <div class="mt-8">
                <h3 class="text-lg font-semibold text-primary border-b pb-2">DATA PEKERJAAN</h3>
                <table class="w-full mt-4 text-sm font-dmsans text-primary">
                    <tr>
                        <td class="py-2 font-medium">Nama Pekerjaan</td>
                        <td>:</td>
                        <td>{{ $data->kerja }}</td>
                    </tr>
                    <tr>
                        <td class="py-2 font-medium">Jabatan</td>
                        <td>:</td>
                        <td>{{ $data->jabatan }}</td>
                    </tr>
                    <tr>
                        <td class="py-2 font-medium">Alamat Pekerjaan</td>
                        <td>:</td>
                        <td>{{ $data->al_kerja }}</td>
                    </tr>
                    <tr>
                        <td class="py-2 font-medium">Telepon Kantor</td>
                        <td>:</td>
                        <td>{{ $data->no_kantor }}</td>
                    </tr>
                </table>
            </div>

            <div class="flex justify-between items-center mt-12">
                <div>
                    <p class="font-medium">Mulia Darma Pratama</p>
                    <img class="w-24 mt-2" src="{{ asset('images/ttd_cap_fix.png') }}" alt="TTD Cap">
                    <p class="mt-2 font-medium">STAFF PMB</p>
                </div>
                <div>
                    <p>{{ date('d-m-Y') }}</p>
                    <p>Calon Mahasiswa,</p>
                    <br><br><br>
                    <p class="font-semibold text-accent">{{ strtoupper($data->nama_leng) }}</p>
                </div>
            </div>

            <div class="text-center mt-8">
                <button id="printpagebutton" onclick="printpage()"
                    class="px-4 py-2 bg-primary text-white rounded-md hover:bg-accent">
                    Cetak
                </button>
            </div>
        </div>
    </div>

    <script>
        function printpage() {
            const printButton = document.getElementById("printpagebutton");
            printButton.style.visibility = 'hidden';
            window.print();
            printButton.style.visibility = 'visible';
        }
    </script>

    {{-- Script --}}
    @stack('prpend-script')
    @stack('addon-script')

    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="./js/app.js"></script>
    <script src="{{ asset('./js/app.js') }}"></script>
</body>

</html>
