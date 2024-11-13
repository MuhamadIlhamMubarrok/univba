@extends('dashboard.app')

@section('title', 'Data Pengaturan')

@section('content')
<div class="page-content">
    <a href="{{ route('settings.create') }}" class="btn btn-primary mb-3"><i class="fa fa-plus"></i> Tambah Pengaturan</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Jenis</th>
                <th>Nama Pengaturan</th>
                <th>Nilai</th>
                <th>Aktif</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($settings as $setting)
            <tr>
                <td>{{ $setting->jenis_set }}</td>
                <td>{{ $setting->nama_set }}</td>
                <td>{{ $setting->nilai_set }}</td>
                <td>{{ $setting->active ? 'Aktif' : 'Tidak Aktif' }}</td>
                <td>
                    <a href="{{ route('settings.edit', $setting->id_setting) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('settings.destroy', $setting->id_setting) }}" method="POST" style="display:inline-block;">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin hapus?')">Hapus</button>
                    </form>
                    <a href="{{ route('settings.toggleStatus', $setting->id_setting) }}" class="btn {{ $setting->active ? 'btn-success' : 'btn-secondary' }} btn-sm">
                        {{ $setting->active ? 'Nonaktifkan' : 'Aktifkan' }}
                    </a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
