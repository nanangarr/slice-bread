<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('tampilan.home');
});
Route::get('/menu', function () {
    return view('menu.menu');
});
Route::get('/total', function () {
    return view('menu.total');
});
Route::get('/total', function () {
    return view('menu.total');
});
Route::get('/rekap', function () {
    return view('menu.rekap');
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
});


