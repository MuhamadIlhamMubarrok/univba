@extends('dashboard.app')

@section('title', 'Data Halaman')

@section('content')
    <div class="page-content">
        <nav class="page-breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">Data Pages</li>
            </ol>
        </nav>
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title">Data Pages</h6>
                        <a href="{{ route('pages.create') }}" class="btn btn-primary mb-3">Tambah Halaman</a>

                        @if (session('success'))
                            <div class="alert alert-success">{{ session('success') }}</div>
                        @endif

                        <!-- Table with smaller size -->
                        <table class="table table-bordered table-sm" width="100%">
                            <thead>
                                <tr>
                                    <th>Judul</th>
                                    <th>Ringkasan</th>
                                    <th>Isi</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($pages as $page)
                                    <tr>
                                        <td>{{ $page->judul }}</td>
                                        <td>{{ Str::limit($page->short, 20) }}</td>
                                        <td>{{ Str::limit($page->isi, 30) }}</td>
                                        <td>
                                            <a href="{{ route('pages.edit', $page->page_id) }}"
                                                class="btn btn-warning btn-sm"><i class="fa fa-info" aria-hidden="true"></i>
                                                Edit</a>
                                            <form action="{{ route('pages.destroy', $page->page_id) }}" method="POST"
                                                style="display:inline-block;">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-danger btn-sm"
                                                    onclick="return confirm('Apa Anda yakin melakukan ini?')"><i
                                                        class="fa fa-trash" aria-hidden="true"></i> Hapus</button>
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
@endsection
