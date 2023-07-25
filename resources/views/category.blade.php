@extends('layouts.main')

@section('container')
    <h2>Kategori : {{ $category }}</h2>

    @foreach ($menus as $menu)
        <h2><a href="/menus/{{ $menu->slug }}"> {{ $menu->name }}</a></h2>
        <p>{{ $menu->description }}</p>
    @endforeach
@endsection
