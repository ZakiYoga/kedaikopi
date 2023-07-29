@extends('layouts.main')

@section('container')
    <h2 class="title text-center">{{ $title }}</h2>
    <div class="row justify-content-center">
        <div class="col-md-6">
            <form action="/menus">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Search Menu" name="search"
                        value="{{ request('search') }}">
                    <button class="btn btn-outline-secondary" type="submit">Search</button>
                </div>
            </form>
        </div>
    </div>
    <div class="card-container">
        @if (count($menus) > 0)
            @foreach ($menus as $menu)
                <div class="card">
                    <img src="gambar-menu.jpg" alt="Gambar Menu" class="card-img">
                    <div class="card-body">
                        <h4 class="card-title"><a href="/menus/{{ $menu->slug }}">{{ $menu->name }}</a></h4>
                        <p class="card-category">Category :<a href="/categories/{{ $menu->category->slug }}">
                                {{ $menu->category->name_category }}</a></p>
                        <p class="card-description">{{ $menu->description }}</p>
                        <p class="card-rating">Rating: {{ $menu->ratting }}</p>
                        <p class="card-price">Rp.{{ $menu->price }}</p>
                    </div>
                    <div class="card-footer">
                        <a href="/menus/{{ $menu->slug }}" class="btn btn-primary">Detail Menu</a>
                    </div>
                </div>
            @endforeach
    </div>
@else
    <p class="text-center fs-4">Menu {{ request('search') }} Not Found</p>
    @endif
@endsection
