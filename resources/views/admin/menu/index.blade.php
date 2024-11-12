@extends('dashboard.app')

@section('title', 'Data Menu')

@section('content')
<div class="page-content">
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="panel-heading">
                        <a href="{{ route('menu.create') }}" class="btn btn-primary mb-3"><i class="fa fa-plus fa-fw"></i> Add Menu</a>
                    </div>
                    <div class="panel-body">
                        @if(session('success'))
                            <div class="alert alert-success">{{ session('success') }}</div>
                        @endif
                        <table class="table table-bordered">
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
                                @foreach($menus as $menu)
                                    <tr>
                                        <td>{{ $menu->urutan }}</td>
                                        <td>{{ $menu->menu }}</td>
                                        <td>{{ $menu->url }}</td>
                                        <td>{{ $menu->active ? 'Active' : 'Inactive' }}</td>
                                        <td>
                                            <a href="{{ route('menu.toggle-active', $menu->menu_id) }}" class="btn btn-{{ $menu->active ? 'success' : 'primary' }}">
                                                {{ $menu->active ? 'Deactivate' : 'Activate' }}
                                            </a>
                                            <a href="{{ route('menu.edit', $menu->menu_id) }}" class="btn btn-warning">Edit</a>
                                            <form action="{{ route('menu.destroy', $menu->menu_id) }}" method="POST" style="display:inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                    @foreach($menu->submenus as $submenu)
                                        <tr>
                                            <td>-- {{ $submenu->urutan }}</td>
                                            <td>-- {{ $submenu->menu }}</td>
                                            <td>{{ $submenu->url }}</td>
                                            <td>{{ $submenu->active ? 'Active' : 'Inactive' }}</td>
                                            <td>
                                                <a href="{{ route('menu.toggle-active', $submenu->menu_id) }}" class="btn btn-{{ $submenu->active ? 'success' : 'primary' }}">
                                                    {{ $submenu->active ? 'Deactivate' : 'Activate' }}
                                                </a>
                                                <a href="{{ route('menu.edit', $submenu->menu_id) }}" class="btn btn-warning">Edit</a>
                                                <form action="{{ route('menu.destroy', $submenu->menu_id) }}" method="POST" style="display:inline;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
