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
                            <tr><td>Nama Lengkap</td><td>{{ $daftar->nama_leng }}</td></tr>
                            <tr><td>No KTP</td><td>{{ $daftar->no_ktp }}</td></tr>
                            <tr><td>Pilihan Kampus</td><td>{{ $daftar->kampus }}</td></tr>
                            <tr><td>Jurusan yang diambil</td><td>{{ $daftar->jurusan }}</td></tr>
                            <tr><td>Lulusan</td><td>{{ $daftar->lulusan }}</td></tr>
                            <tr><td>Tempat Tgl Lahir</td><td>{{ $daftar->tmpt_lahir }}, {{ tanggal_indonesia($daftar->tgl_lahir) }}</td></tr>
                            <tr><td>Jenis Kelamin</td><td>{{ $daftar->j_kel == 'L' ? 'Laki-Laki' : 'Perempuan' }}</td></tr>
                            <!-- Add remaining fields -->
                        </tbody>
                    </table>
                </div>
                <div class="mt-3">
                    <button onclick="window.history.go(-1); return false;" class="btn btn-danger">Kembali</button>
                </div>
            </div>
        </div>
    </div>
</div>
@php
function tanggal_indonesia($tanggal){
    $bulan = [1 => 'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
    $pecahkan = explode('-', $tanggal);
    return $pecahkan[2] . ' ' . $bulan[(int)$pecahkan[1]] . ' ' . $pecahkan[0];
}
@endphp
@endsection
