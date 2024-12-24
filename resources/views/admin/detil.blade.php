@extends('dashboard.app')

@section('title', 'Detail Data Pendaftaran')

@section('content')
    <div class="page-content">
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="panel-heading">
                            <h3 class="panel-title mb-4">Informasi Pendaftar</h3>
                        </div>
                        <div class="panel-body">
                            <table class="table table-hover">
                                <tbody>
                                    <tr>
                                        <td>Nomor Pendaftaran</td>
                                        <td>PO_{{ $daftar->daftar_id }}</td>
                                    </tr>
                                    <tr>
                                        <td>Nama Lengkap</td>
                                        <td>{{ $daftar->nama_leng }}</td>
                                    </tr>
                                    <tr>
                                        <td>No KTP</td>
                                        <td>{{ $daftar->no_ktp }}</td>
                                    </tr>
                                    <tr>
                                        <td>Pilihan Kampus</td>
                                        <td>{{ $daftar->kampus }}</td>
                                    </tr>
                                    <tr>
                                        <td>Jurusan yang diambil</td>
                                        <td>{{ $daftar->jurusan }}</td>
                                    </tr>
                                    <tr>
                                        <td>Lulusan</td>
                                        <td>{{ $daftar->lulusan }}</td>
                                    </tr>
                                    <tr>
                                        <td>Tempat Tgl Lahir</td>
                                        <td>{{ $daftar->tmpt_lahir }}, {{ tanggal_indonesia($daftar->tgl_lahir) }}</td>
                                    </tr>
                                    <tr>
                                        <td>Jenis Kelamin</td>
                                        <td>{{ $daftar->j_kel == 'L' ? 'Laki-Laki' : 'Perempuan' }}</td>
                                    </tr <tr>
                                    <td>Agama</td>
                                    <td>{{ $daftar->agama }}</td>
                                    </tr>
                                    <tr>
                                        <td>Alamat KTP</td>
                                        <td>{{ $daftar->al_ktp }}</td>
                                    </tr>
                                    <tr>
                                        <td>Alamat Domisili</td>
                                        <td>{{ $daftar->al_dom }}</td>
                                    </tr>
                                    <tr>
                                        <td>NO HP</td>
                                        <td>{{ $daftar->no_hp }}</td>
                                    </tr>
                                    <tr>
                                        <td>NO WA</td>
                                        <td>{{ $daftar->no_wa }}</td>
                                    </tr>
                                    <tr>
                                        <td>Email</td>
                                        <td>{{ $daftar->email }}</td>
                                    </tr>
                                    <tr>
                                        <td>Nama Ayah</td>
                                        <td>{{ $daftar->ayah }}</td>
                                    </tr>
                                    <tr>
                                        <td>Nama Ibu</td>
                                        <td>{{ $daftar->ibu }}</td>
                                    </tr>
                                    <tr>
                                        <td>Lulusan</td>
                                        <td>{{ $daftar->lulusan }}</td>
                                    </tr>
                                    <tr>
                                        <td>Asal Sekolah</td>
                                        <td>{{ $daftar->sekolah }}</td>
                                    </tr>
                                    <tr>
                                        <td>Biaya</td>
                                        <td>{{ $daftar->biaya }}</td>
                                    </tr>
                                    <tr>
                                        <td>Sumber Informasi</td>
                                        <td>{{ $daftar->info }}</td>
                                    </tr>

                                    <!-- Add remaining fields -->
                                </tbody>
                            </table>
                        </div>
                        <div>
                            <div class="panel-heading">
                                <h3 class="panel-title mt-4 mb-2">NOTE :</h3>
                            </div>
                            <p class="mb-2">untuk semua marketing dapat memfollow up langsung pendaftar melalu button wa
                                di bawah ini :
                            </p>
                            <a href="https://wa.me/{{ $daftar->no_wa }}?text={{ urlencode('Terimakasih sudah melakukan pendaftaran online di ' . $daftar->kampus . ' atas nama ' . $daftar->nama_leng . ' dengan nomor PO ' . $daftar->no_ktp . ', data sudah kami terima. Kapan dapat melakukan biaya pendaftaran?') }}"
                                target="_blank" rel="noopener noreferrer" class="btn btn-info">
                                Follow Up Cok !
                            </a>

                        </div>
                        <div class="mt-3">
                            <button onclick="window.history.go(-1); return false;" class="btn btn-danger">Kembali</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @php
            function tanggal_indonesia($tanggal)
            {
                if (empty($tanggal)) {
                    return 'Tanggal Tidak Diketahui'; // Jika tanggal kosong
                }

                // Pastikan tanggal dalam format yang benar (YYYY-MM-DD)
                $pecahkan = explode('-', $tanggal);

                // Validasi apakah hasil explode() memiliki tiga komponen
                if (count($pecahkan) == 3) {
                    $bulan = [
                        1 => 'Januari',
                        'Februari',
                        'Maret',
                        'April',
                        'Mei',
                        'Juni',
                        'Juli',
                        'Agustus',
                        'September',
                        'Oktober',
                        'November',
                        'Desember',
                    ];

                    return $pecahkan[2] . ' ' . $bulan[(int) $pecahkan[1]] . ' ' . $pecahkan[0];
                }

                // Jika format tanggal tidak valid
                return 'Tanggal Tidak Valid';
            }
        @endphp

    @endsection
