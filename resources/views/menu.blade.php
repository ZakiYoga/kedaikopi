@extends('layouts.main')

@section('container')
    <h2>Menu Foods And Beverages</h2>

    @foreach ($menus as $menu)
        <h2><a href="/menus/{{ $menu->slug }}">{{ $menu->name }}</a></h2>
        <p>Category : <a href="/categories/{{ $menu->category->slug }}">{{ $menu->category->name_category }}</a></p>


        <p>{{ $menu->description }}</p>
        <a href="/menus/{{ $menu->slug }}">Detail Menu</a>
    @endforeach
@endsection
