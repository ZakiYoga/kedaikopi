<!-- categories.blade.php -->
@extends('layouts.main')

@section('container')
    <h2>Kategori Menu</h2>

    @foreach ($categories as $category)
        <h2><a href="/categories/{{ $category->slug }}">{{ $category->name_category }}</a></h2>
    @endforeach
@endsection
