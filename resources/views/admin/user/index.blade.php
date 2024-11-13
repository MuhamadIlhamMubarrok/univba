@extends('dashboard.app')

@section('title', 'Data User')

@section('content')
    <div class="page-content">
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <a href="{{ route('user.create') }}" class="btn btn-primary mb-3">Tambah User</a>

                        @if (session('success'))
                            <div class="alert alert-success">{{ session('success') }}</div>
                        @endif

                        <!-- Table with smaller size -->
                        <table class="table table-bordered table-sm" width="100%">
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
                                        <td>{{ ($user->currentPage() - 1) * $user->perPage() + $users + 1 }}
                                        <td>{{ $index->email }}</td>
                                        <td>{{ $index->name }}</td>
                                        <td>{{ $index->kampus }}</td>
                                        <td>
                                            @if ($index->gambar)
                                                <img src="{{ asset('storage/userImage/' . $index->gambar) }}" alt="gambar"
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
                                                        onclick="return confirm('Apa Anda yakin melakukan ini?')"><i
                                                            class="fa fa-trash" aria-hidden="true"></i> Hapus user</button>
                                                </form>
                                            @endif

                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="mt-3">
                        {{ $user->links('vendor.pagination.bootstrap-5') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
