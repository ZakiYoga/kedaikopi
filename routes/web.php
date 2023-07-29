<?php

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
    $userRole = auth()->user()->role;

    return view('order', [
        'userRole' => $userRole,        
        "title" => "Order",
        "active" => 'order',
    ]);
});

Route::get('/about', function () {
    $userRole = auth()->user()->role;

    return view('about', [
        'userRole' => $userRole,        
        "title" => "About",
        "active" => 'about'
    ]);
});

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/categories', function(){
    $categories = App\Models\Category::all();
    $userRole = auth()->user()->role;

    return view('categories', [
        'userRole' => $userRole,        
        'title' => 'Kategori Menu',
        'active' => 'category',
        'categories' => $categories,
    ]);
});



// Route untuk dashboard admin
Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/dashboard-admin', function () {
        $userRole = auth()->user()->role;
        return view('dashboard-admin.index', [
            'userRole' => $userRole,
            "title" => "Dashboard Admin",
            "active" => 'dashboard'
        ]);
    });
});

// Route untuk dashboard user
Route::middleware(['auth', 'user'])->group(function () {
    Route::get('/dashboard', function () {
        $userRole = auth()->user()->role;
        return view('dashboard-user.index', [
            'userRole' => $userRole,
            "title" => "Dashboard User",
            "active" => 'dashboard-menu'

        ]);
    });
});

Route::resource('/dashboard-admin/menus', DashboardMenuController::class)->middleware('auth');