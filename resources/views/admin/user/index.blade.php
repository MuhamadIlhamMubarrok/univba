@extends('dashboard.app')

@section('title', 'Data User')

@section('content')
    <div class="page-content">
        <nav class="page-breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">Data User</li>
            </ol>
        </nav>
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h1 class="card-title">Data User</h1>
                        <a href="{{ route('user.create') }}" class="btn btn-primary mb-3">
                            <i class="fa fa-plus"></i> Tambah User
                        </a>

                        @if (session('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                {{ session('success') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                        @endif

                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-sm">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Email</th>
                                        <th>Nama</th>
                                        <th>Nama Kampus</th>
                                        <th>Gambar</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($user as $users => $index)
                                        <tr>
                                            <td>{{ ($user->currentPage() - 1) * $user->perPage() + $users + 1 }}</td>
                                            <td>{{ $index->email }}</td>
                                            <td>{{ $index->name }}</td>
                                            <td>{{ $index->kampus }}</td>
                                            <td>
                                                @if ($index->gambar)
                                                    <img src="{{ asset('storage/userImage/' . $index->gambar) }}"
                                                        alt="gambar"
                                                        style="width: 50px; height: 50px; object-fit: cover;">
                                                @else
                                                    <span class="text-muted">Tidak Ada</span>
                                                @endif
                                            </td>
                                            <td>
                                                @if (Auth::id() !== $index->id && $index->id !== 1)
                                                    <form action="{{ route('user.delete', $index->id) }}" method="POST"
                                                        style="display:inline-block;">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button class="btn btn-danger btn-sm"
                                                            onclick="return confirm('Apa Anda yakin melakukan ini?')">
                                                            <i class="fa fa-trash"></i> Hapus
                                                        </button>
                                                    </form>
                                                @endif
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="mt-3">
                        {{ $user->links('vendor.pagination.simple-bootstrap-5') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
