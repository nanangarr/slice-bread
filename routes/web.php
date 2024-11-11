<?php
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdukController;

Route::get('/login', [AuthController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [AuthController::class, 'authenticate']);
Route::get('/register', [AuthController::class, 'register']);
Route::post('/register', [AuthController::class, 'process'])->middleware('web');
Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth');
Route::get('/reset', [AuthController::class, 'reset']);



Route::get('/', function () {
    return view('tampilan.home');
});

Route::resource('/menu', ProdukController::class);
/*
Route::get('/isidata', function () {
    return view('menu.isiData');
});
Route::get('/total', function () {
    return view('menu.totalSementara');
});
Route::get('/rekap', function () {
    return view('menu.rekapSemua');
});
Route::get('/cara', function () {
    return view('tampilan.cara');
});
Route::get('/kontak', function () {
    return view('tampilan.kontak');
});
Route::get('/login', function () {
    return view('auth.login');
});
Route::get('/reset', function () {
    return view('auth.reset');
});
Route::get('/register', function () {
    return view('auth.register');
});
Route::get('/deskripsi', function () {
    return view('menu.deskripsi');
    */
