@extends('dashboard.app')

@section('title', 'Data Galeri Foto')

@section('content')
    <div class="page-content">
        <nav class="page-breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">Data Gallery</li>
            </ol>
        </nav>
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="panel-heading mb-3 d-flex justify-content-between align-items-center">
                            <h1 class="card-title">Data Gallery</h1>
                            <a href="{{ route('gallery.create') }}" class="btn btn-primary">
                                <i class="fa fa-plus fa-fw"></i> Tambah Foto
                            </a>
                        </div>
                        <div class="panel-body">
                            @if (session('success'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    {{ session('success') }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                            @endif
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Kategori</th>
                                            <th>File</th>
                                            <th>Aktif</th>
                                            <th>Dibuat Pada</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($image as $index => $item)
                                            <tr>
                                                <td>{{ ($image->currentPage() - 1) * $image->perPage() + $index + 1 }}
                                                </td>
                                                <td>{{ $item->kategori }}</td>
                                                <td>
                                                    @if ($item->file)
                                                        <img src="{{ asset('storage/galleryFoto/' . $item->file) }}"
                                                            alt="gambar"
                                                            style="width: 50px; height: 50px; object-fit: cover;">
                                                    @else
                                                        <span class="text-muted">Tidak Ada</span>
                                                    @endif
                                                </td>
                                                <td>{{ $item->active ? 'Aktif' : 'Tidak Aktif' }}</td>
                                                <td>{{ $item->created_at }}</td>
                                                <td>
                                                    <div class="d-flex flex-wrap gap-2">
                                                        <a href="{{ route('gallery.edit', $item->image_id) }}"
                                                            class="btn btn-warning btn-sm">Edit</a>
                                                        <form action="{{ route('gallery.delete', $item->image_id) }}"
                                                            method="POST" style="display:inline-block;">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-danger btn-sm"
                                                                onclick="return confirm('Yakin ingin menghapus?')">Hapus</button>
                                                        </form>
                                                    </div>
                                                </td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="6" class="text-center">Tidak ada foto di galeri</td>
                                            </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="mt-3">
                            {{ $image->links('vendor.pagination.simple-bootstrap-5') }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
