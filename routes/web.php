<?php

use Illuminate\Support\Facades\Route;

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
    return view('beranda');
});


Route::get('/sejarah', function () {
    return view('/tentang-gereja/sejarah');
});

Route::get('/romo', function () {
    return view('/tentang-gereja/romo');
})->name('pastor.paroki');

Route::get('/tentang-gereja/dewan-paroki', function () {
    return view('gereja.dewan_paroki');
})->name('dewan.paroki');

Route::get('/blog', function () {
    return view('/informasi/blog');
})->name('pastor.paroki');

Route::get('/donasi', function () {
    return view('/informasi/donasi');
});
Route::get('/kontak', function () {
    return view('/informasi/kontak');
});
