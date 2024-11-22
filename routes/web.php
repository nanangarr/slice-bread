<?php
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\KeranjangController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\IsidataController;
use App\Http\Controllers\TotalController;

Route::get('/login', [AuthController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [AuthController::class, 'authenticate']);
Route::get('/register', [AuthController::class, 'register']);
Route::post('/register', [AuthController::class, 'process'])->middleware('web');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth');
Route::get('/reset', [AuthController::class, 'reset']);

Route::get('/', [DashboardController::class, 'index']);
Route::get('/dashboard', [DashboardController::class, 'index']);

Route::resource('/menu', ProdukController::class);

Route::resource('/keranjang', KeranjangController::class);

Route::resource('/total', TotalController::class);

Route::resource('/isidata', IsidataController::class);

Route::get('/rekap', function () {
    return view('menu.rekapSemua');
});
Route::get('/cara', function () {
    return view('tampilan.cara');
});
Route::get('/kontak', function () {
    return view('tampilan.kontak');
});
Route::get('/reset', function () {
    return view('auth.reset');
});