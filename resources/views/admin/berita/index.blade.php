@extends('dashboard.app')

@section('title', 'Berita Terkini')

@section('content')
<div class="page-content">
    <nav class="page-breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
            <li class="breadcrumb-item active" aria-current="page">Berita Terkini</li>
        </ol>
    </nav>

    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">Berita Terkini</h6>
                    <a href="{{ route('berita.create') }}" class="btn btn-primary mb-3"><i class="fa fa-plus"></i> Tambah Berita</a>

                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Judul</th>
                                    <th>Ringkasan</th>
                                    <th>Tanggal Berita</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($beritas as $index => $berita)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td>{{ $berita->judul }}</td>
                                    <td>{{ Str::limit($berita->ringkasan, 50) }}</td>
                                    <td>{{ $berita->tanggal_berita }}</td>
                                    <td>
                                        <a href="{{ route('berita.edit', $berita->id_berita) }}" class="btn btn-warning btn-circle">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                        <form action="{{ route('berita.destroy', $berita->id_berita) }}" method="POST" style="display:inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-circle" onclick="return confirm('Apa Anda yakin menghapus berita ini?')">
                                                <i class="fa fa-trash"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="d-flex justify-content-center mt-4">
                            {{ $beritas->links('vendor.pagination.bootstrap-5') }}
                        </div>                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
