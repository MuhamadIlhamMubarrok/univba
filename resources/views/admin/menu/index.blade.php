@extends('dashboard.app')

@section('title', 'Data Menu')

@section('content')
    <div class="page-content">
        <nav class="page-breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">Data Menu</li>
            </ol>
        </nav>
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h1 class="card-title">Data Menu</h1>
                        <div class="panel-heading">
                            <a href="{{ route('menu.create') }}" class="btn btn-primary mb-3">
                                <i class="fa fa-plus fa-fw"></i> Add Menu
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
                                            <th>Order</th>
                                            <th>Menu</th>
                                            <th>URL</th>
                                            <th>Active</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($menus as $menu)
                                            <tr>
                                                <td>{{ $menu->urutan }}</td>
                                                <td>{{ $menu->menu }}</td>
                                                <td>{{ $menu->url }}</td>
                                                <td>{{ $menu->active ? 'Active' : 'Inactive' }}</td>
                                                <td>
                                                    <div class="d-flex flex-wrap gap-2">
                                                        <a href="{{ route('menu.toggle-active', $menu->menu_id) }}"
                                                            class="btn btn-{{ $menu->active ? 'success' : 'primary' }} btn-sm">
                                                            {{ $menu->active ? 'Deactivate' : 'Activate' }}
                                                        </a>
                                                        <a href="{{ route('menu.edit', $menu->menu_id) }}"
                                                            class="btn btn-warning btn-sm">Edit</a>
                                                        <form action="{{ route('menu.destroy', $menu->menu_id) }}"
                                                            method="POST" style="display:inline;">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-danger btn-sm"
                                                                onclick="return confirm('Are you sure?')">Delete</button>
                                                        </form>
                                                    </div>
                                                </td>
                                            </tr>
                                            @foreach ($menu->submenus as $submenu)
                                                <tr>
                                                    <td>-- {{ $submenu->urutan }}</td>
                                                    <td>-- {{ $submenu->menu }}</td>
                                                    <td>{{ $submenu->url }}</td>
                                                    <td>{{ $submenu->active ? 'Active' : 'Inactive' }}</td>
                                                    <td>
                                                        <div class="d-flex flex-wrap gap-2">
                                                            <a href="{{ route('menu.toggle-active', $submenu->menu_id) }}"
                                                                class="btn btn-{{ $submenu->active ? 'success' : 'primary' }} btn-sm">
                                                                {{ $submenu->active ? 'Deactivate' : 'Activate' }}
                                                            </a>
                                                            <a href="{{ route('menu.edit', $submenu->menu_id) }}"
                                                                class="btn btn-warning btn-sm">Edit</a>
                                                            <form action="{{ route('menu.destroy', $submenu->menu_id) }}"
                                                                method="POST" style="display:inline;">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="submit" class="btn btn-danger btn-sm"
                                                                    onclick="return confirm('Are you sure?')">Delete</button>
                                                            </form>
                                                        </div>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        @endforeach
                                    </tbody>
                                </table>
                                <div class="d-flex justify-content-start mt-4">
                                    {{ $menus->links('vendor.pagination.simple-bootstrap-5') }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
