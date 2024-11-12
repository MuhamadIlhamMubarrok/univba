@extends('dashboard.app')

@section('title', 'Data Beranda')

@section('content')
<div class="page-content">
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="panel-heading mb-3">
                        <a href="{{ route('beranda.create') }}" class="btn btn-primary"><i class="fa fa-plus fa-fw"></i> Tambah Beranda</a>
                    </div>
                    <div class="panel-body">
                        @if(session('success'))
                            <div class="alert alert-success">{{ session('success') }}</div>
                        @endif
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Posisi</th>
                                    <th>Judul</th>
                                    <th>Urutan</th>
                                    <th>Aktif</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach ($berandas as $beranda)
                                    <tr>
                                        <td>{{ $beranda->tipe }}</td>
                                        <td>{{ $beranda->page->judul ?? 'No Page' }}</td> <!-- Use null coalescing to avoid errors -->
                                        <td>{{ $beranda->urut }}</td>
                                        <td>{{ $beranda->active ? 'Aktif' : 'Tidak aktif' }}</td>
                                        <td>
                                            <a href="{{ route('beranda.edit') }}" class="btn btn-warning">Edit</a>
                                            <form action="{{ route('beranda.destroy', $beranda->id) }}" method="POST" style="display:inline-block;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus?')">Hapus</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
