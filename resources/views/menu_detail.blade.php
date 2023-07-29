@extends('layouts.main')

@section('container')
    <h2 class="title">{{ $title }}</h2>

    <div class="card-container">
        <div class="card">
            <img src="gambar-menu.jpg" alt="Gambar Menu" class="card-img">
            <div class="card-body">
                <h4 class="card-title"><a href="/menus/{{ $menu->slug }}">{{ $menu->name }}</a></h4>
                <p class="card-category">Category :<a
                        href="/categories/{{ $menu->category->slug }}">{{ $menu->category->name_category }}</a></p>
                <p class="card-description">{{ $menu->description }}</p>
                <p class="card-rating">Rating: {{ $menu->ratting }}</p>
                <p class="card-price">Rp.{{ $menu->price }}</p>
            </div>
            <div class="card-footer">
                <a href="/menus/{{ $menu->slug }}" class="btn btn-primary">Detail Menu</a>
            </div>
        </div>
    </div>
@endsection
