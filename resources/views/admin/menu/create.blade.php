@extends('dashboard.app')

@section('title', 'Tambah Data Menu')

@section('content')
    <div class="page-content">
        <nav class="page-breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="{{ route('menu') }}">Menu</a></li>
                <li class="breadcrumb-item active" aria-current="page">Tambah Menu</li>
            </ol>
        </nav>
        <div class="row">
            <div class="stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Tambah Gambar Menu</h4>

                        @if ($errors->any())
                            <div id="error-alert" class="alert alert-danger">
                                <strong>Terjadi Kesalahan!</strong>
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form method="POST" action="{{ route('menu.store') }}">
                            @csrf
                            <div class="form-group mb-2">
                                <label class="mb-2 mt-2">Kelompok Menu</label>
                                <select name="submenu_id" class="form-control">
                                    <option value="0">Tidak ada</option>
                                    @foreach ($menus as $menu)
                                        <option value="{{ $menu->menu_id }}">{{ $menu->menu }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group mb-2">
                                <label class="mb-2 mt-2">Menu</label>
                                <input type="text" name="menu" class="form-control" placeholder="Masukkan menu">
                            </div>
                            <div class="form-group mb-2">
                                <label class="mb-2 mt-2">Url</label>
                                <input type="text" name="url" class="form-control" placeholder="http://...">
                            </div>
                            <div class="form-group mb-2">
                                <label class="mb-2 mt-2">Urutan</label>
                                <input type="number" name="urutan" class="form-control">
                            </div>
                            <button type="submit" class="btn btn-primary mb-2 mt-2">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
