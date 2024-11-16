@extends('dashboard.app')

@section('title', 'Data Pendaftaran')

@section('content')
    <div class="page-content">
        <nav class="page-breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">Data Pendaftaran</li>
            </ol>
        </nav>

        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        @if (session('error'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ session('error') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <div class="d-flex align-items-center">
                                <input id="datepicker" placeholder="Tanggal Awal"
                                    class="form-control d-inline-block w-auto" />
                                <p class="px-3">s.d </p>
                                <input id="datepicker1" placeholder="Tanggal Akhir"
                                    class="form-control d-inline-block w-auto" />
                            </div>
                            <a href="#" onclick="cetak('{{ route('daftar.cetak') }}')" class="btn btn-primary btn-sm">
                                <i class="fa fa-print"></i> Cetak
                            </a>
                        </div>

                        <div class="table-responsive">
                            <table class="table table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>Tanggal</th>
                                        <th>Nama</th>
                                        <th>No</th>
                                        <th>Email</th>
                                        <th>JK</th>
                                        <th style="display: none;">Kota</th>
                                        <th style="display: none;">Kelas</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($daftars as $daftar)
                                        <tr>
                                            <td>{{ \Carbon\Carbon::parse($daftar->created_at)->format('Y-m-d') }}</td>
                                            <td>{{ $daftar->nama_leng }}</td>
                                            <td>{{ $daftar->no_hp }}</td>
                                            <td>{{ $daftar->email }}</td>
                                            <td>{{ $daftar->j_kel }}</td>
                                            <td style="display: none;">{{ $daftar->kampus }}</td>
                                            <td style="display: none;">{{ $daftar->kelas }}</td>
                                            <td>
                                                <a href="{{ route('daftar.detil', $daftar->daftar_id) }}"
                                                    class="btn btn-primary btn-sm">
                                                    <i class="fa fa-info"></i>
                                                </a>
                                                <a href="{{ route('daftar.hapus', $daftar->daftar_id) }}"
                                                    onclick="return confirm('Apa Anda yakin melakukan ini?')"
                                                    class="btn btn-danger btn-sm">
                                                    <i class="fa fa-close"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                        <div class="mt-3">
                            <button onclick="exportData()" class="btn btn-success btn-sm">Export to Excel</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        $(document).ready(function() {
            $("#datepicker, #datepicker1").datepicker({
                format: 'yyyy-mm-dd',
                autoclose: true
            });
        });
    </script>
    <script>
        function cetak(url) {
            window.location.href = url;
        }

        function exportData() {
            var table = document.getElementById("dataTables-example");
            var rows = [];
            for (var i = 0, row; row = table.rows[i]; i++) {
                var columns = [];
                for (var j = 0; j < row.cells.length; j++) {
                    columns.push(row.cells[j].innerText);
                }
                rows.push(columns);
            }
            var csvContent = "data:text/csv;charset=utf-8," + rows.map(e => e.join(",")).join("\n");
            var link = document.createElement("a");
            link.setAttribute("href", encodeURI(csvContent));
            link.setAttribute("download", "Data_Pendaftaran.csv");
            document.body.appendChild(link);
            link.click();
        }

        setTimeout(function() {
            let alertElement = document.querySelector('.alert');
            if (alertElement) {
                alertElement.classList.remove('show');
                alertElement.classList.add('fade');
            }
        }, 3000);
    </script>
@endpush
