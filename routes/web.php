<?php
use App\Models\Category;

use App\Models\Menu;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardMenuController;
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
    $menus = Menu::where('ratting', 'Sangat Memuaskan')->take(3)->get();

    return view('beranda', [
        "title" => "beranda",
        "active" => 'beranda',
        "menus" => $menus
    ]);
});

Route::get('/menus', [MenuController::class, 'index']);
Route::get('/menus/{menu:slug}', [MenuController::class, 'show']);

Route::get('/order', function () {
    return view('order', [
        "title" => "Order",
        "active" => 'order',
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "active" => 'about'
    ]);
});

Route::get('/dashboard-coba', function () {
    return view('/layouts/main', [
        "title" => "dashboard"
    ]);
}); 

Route::get('/dashboard', function () {
    return view('/dashboard', [
        "title" => "Dashboard",
        "active" => 'dashboard'
    ]);
})->middleware('auth'); 

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/categories', function(){
    $categories = App\Models\Category::all();

    return view('categories', [
        'title' => 'Kategori Menu',
        'active' => 'category',
        'categories' => $categories,
    ]);
});


Route::get('/categories/{category:slug}', function(Category $category){
    return view('menu', [
        'title' => "Category : $category->name_category",
        'active' => 'categories',
        'menus' => $category->menus,
    ]);
});

Route::resource('/dashboard/admin', DashboardMenuController::class)->middleware('auth');