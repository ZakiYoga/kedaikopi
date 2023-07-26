@extends('layouts.main')

@section('container')
    <h2>Menu Foods And Beverages</h2>

    <h3>{{ $menu->name }}</h3>
    <p>{{ $menu->description }}</p>

    <p>Category : <a href="/categories/{{ $menu->category->slug }}">{{ $menu->category->name_category }}</a></p>
    <a href="/menus">Back To Menu</a>
@endsection
