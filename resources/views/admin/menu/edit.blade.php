@extends('dashboard.app')

@section('title', 'Edit Data Menu')

@section('content')
<div class="page-content">
    <div class="row">
        <div class="col-lg-12">
            <form method="POST" action="{{ route('menu.update', $menu->menu_id) }}">
                @csrf
                @method('PUT')
                
                <div class="form-group mb-3">
                    <label>Kelompok Menu</label>
                    <select name="submenu_id" class="form-control">
                        <option value="">Tidak ada</option>
                        @foreach($parentMenus as $parent)
                            <option value="{{ $parent->menu_id }}" 
                                {{ $menu->submenu_id == $parent->menu_id ? 'selected' : '' }}>
                                {{ $parent->menu }}
                            </option>
                        @endforeach
                    </select>
                </div>
                
                <div class="form-group mb-3">
                    <label>Menu</label>
                    <input type="text" name="menu" class="form-control" value="{{ $menu->menu }}" required>
                </div>
                
                <div class="form-group mb-3">
                    <label>Url</label>
                    <input type="text" name="url" class="form-control" value="{{ $menu->url }}" required>
                </div>
                
                <div class="form-group mb-3">
                    <label>Urutan</label>
                    <input type="number" name="urutan" class="form-control" value="{{ $menu->urutan }}" required>
                </div>
                
                <button type="submit" class="btn btn-primary">Update</button>
                <a href="{{ route('menu') }}" class="btn btn-danger">Kembali</a>
            </form>
        </div>
    </div>
</div>
@endsection
