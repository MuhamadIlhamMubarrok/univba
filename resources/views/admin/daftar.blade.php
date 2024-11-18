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
                        <div class="d-flex flex-wrap align-items-center gap-2 mb-3">
                            <input id="datepicker" type="date" placeholder="Tanggal Awal" class="form-control w-auto" />
                            <span>s.d</span>
                            <input id="datepicker1" type="date" placeholder="Tanggal Akhir"
                                class="form-control w-auto" />
                            <button onclick="cetak('{{ route('daftar.cetak') }}')" class="btn btn-primary btn-sm">
                                <i class="fa fa-print"></i> Cetak PDF
                            </button>
                            <button onclick="exportData()" class="btn btn-success btn-sm">
                                <i class="fa fa-file-excel"></i> Export to Excel
                            </button>
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
                                        <th>Kota</th>
                                        <th>Kelas</th>
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
                                            <td>{{ $daftar->kampus }}</td>
                                            <td>{{ $daftar->kelas }}</td>
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
                        <div class="d-flex justify-content-start mt-4">
                            {{ $daftars->links('vendor.pagination.simple-bootstrap-5') }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <!-- Include DataTables -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.3.4/css/buttons.dataTables.min.css">
    <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.4/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.4/js/buttons.html5.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.18.5/xlsx.full.min.js"></script>

    <script>
        $(document).ready(function() {
            // Initialize datepicker
            $("#datepicker, #datepicker1").datepicker({
                format: 'yyyy-mm-dd',
                autoclose: true
            });

            // Initialize DataTables
            $('#dataTables-example').DataTable({
                dom: 'Bfrtip',
                buttons: [{
                        extend: 'excelHtml5',
                        text: '<i class="fa fa-file-excel"></i> Export Excel',
                        className: 'btn btn-success btn-sm'
                    },
                    {
                        extend: 'pdfHtml5',
                        text: '<i class="fa fa-file-pdf"></i> Export PDF',
                        className: 'btn btn-danger btn-sm'
                    }
                ],
                ordering: true,
                paging: true,
                searching: true
            });
        });

        function cetak(url) {
            const startDate = document.getElementById('datepicker').value;
            const endDate = document.getElementById('datepicker1').value;
            const query = `?start_date=${startDate}&end_date=${endDate}`;
            window.location.href = url + query;
        }

        function exportData() {
            var table = document.getElementById("dataTables-example");
            var wb = XLSX.utils.table_to_book(table, {
                sheet: "DataPendaftaran"
            });
            XLSX.writeFile(wb, "Data_Pendaftaran.xlsx");
        }
    </script>
@endpush
