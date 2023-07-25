@extends('layouts.main')

@section('container')
    <h2>Kategori Menu</h2>

    @foreach ($categories as $category)
        <ul>
            <li>
                <h2><a href="/categories/{{ $category->slug }}">{{ $categories->name_category }}</a></h2>
            </li>
        </ul>
    @endforeach
@endsection
