@extends('dashboard.app')

@section('title', 'Tambah Data Menu')

@section('content')
<div class="page-content">
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="col-lg-12">
                <form method="POST" action="{{ route('menu.store') }}">
                    @csrf
                    <div class="form-group mb-2">
                        <label class="mb-2 mt-2">Kelompok Menu</label>
                        <select name="submenu_id" class="form-control">
                            <option value="">Tidak ada</option>
                            @foreach($menus as $menu)
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
@endsection
