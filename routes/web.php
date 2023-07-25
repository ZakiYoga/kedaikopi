<?php

use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\RegisterController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('beranda', [
        "title" => "beranda"
    ]);
});

Route::get('/menus', [MenuController::class, 'index']);
Route::get('/menus/{menu:slug}', [MenuController::class, 'show']);

Route::get('/order', function () {
    return view('order', [
        "title" => "Order"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About"
    ]);
});

Route::get('/dashboard-coba', function () {
    return view('/layouts/main', [
        "title" => "dashboard"
    ]);
}); 

Route::get('/dashboard', function () {
    return view('/dashboard', [
        "title" => "Dashboard"
    ]);
}); 

Route::get('/login', [LoginController::class, 'index']);
Route::get('/register', [RegisterController::class, 'index']);

Route::get('/categories', function(){
    return view('categories', [
        'title' =>'Kategori Menu',
        'Categories' => Category::all()
    ]);
});

Route::get('/categories/{category:slug}', function(Category $category){
    return view('category', [
        'title' => $category->name_category,
        'menus' => $category->menus,
        'category' => $category->name_category
    ]);
});