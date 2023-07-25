<?php
use App\Models\Category;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
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

Route::get('/ourproduct', function () {
    return view('ourproduct');
});

Route::get('/order', function () {
    return view('order');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/dashboard-admin', function () {
    return view('dashboardadmin');
}); 

Route::get('/login', [LoginController::class, 'index']);

Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);