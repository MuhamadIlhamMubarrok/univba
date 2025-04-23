@extends('dashboard.app')

@section('title', 'Edit Data Menu')

@section('content')
    <div class="page-content">
        <nav class="page-breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="{{ route('menu') }}">Data Menu</a></li>
                <li class="breadcrumb-item active" aria-current="page">Edit Menu</li>
            </ol>
        </nav>
        <div class="row">
            <div class="stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Edit Menu</h4>

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

                        <form method="POST" action="{{ route('menu.update', $menu->menu_id) }}">
                            @csrf
                            @method('PUT')

                            <div class="form-group mb-3">
                                <label class="form-label">Kelompok Menu</label>
                                <select name="submenu_id" class="form-control">
                                    <option value="0">Tidak ada</option>
                                    @foreach ($parentMenus as $parent)
                                        <option value="{{ $parent->menu_id }}"
                                            {{ $menu->submenu_id == $parent->menu_id ? 'selected' : '' }}>
                                            {{ $parent->menu }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group mb-3">
                                <label class="form-label">Menu</label>
                                <input type="text" name="menu" class="form-control" value="{{ $menu->menu }}"
                                    required>
                            </div>

                            <div class="form-group mb-3">
                                <label class="form-label">Url</label>
                                <input type="text" name="url" class="form-control" value="{{ $menu->url }}"
                                    required>
                            </div>

                            <div class="form-group mb-3">
                                <label class="form-label">Urutan</label>
                                <input type="number" name="urutan" class="form-control" value="{{ $menu->urutan }}"
                                    required>
                            </div>

                            <button type="submit" class="btn btn-primary">Update</button>
                            <a href="{{ route('menu') }}" class="btn btn-danger">Kembali</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
