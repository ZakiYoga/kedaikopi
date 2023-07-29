@extends('layouts.main')

@section('container')
    <h2>All Menu</h2>
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Category</th>
                <th scope="col">Description</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($menus as $menu)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $menu->name }}</td>
                    <td>{{ $menu->category->name_category }}</td>
                    <td>{{ $menu->description }}</td>
                    <td>
                        <a href="/dashboard-admin/menus/{{ $menu->slug }}"><i class="fa-regular fa-eye fa-sm"></i></a>
                        <a href=""><i class="fa-solid fa-pen-to-square"></i></a>
                        <a href=""><i class="fa-solid fa-trash"></i></i></a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
