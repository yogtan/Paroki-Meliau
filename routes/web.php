<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// Admin POST
Route::get('/admin/posts', [PostController::class, 'show_posts'])->name('admin_show_posts');
Route::get('/admin/posts/create', [PostController::class, 'show_create'])->name('admin_show_create');
Route::post('/admin/posts/create', [PostController::class, 'store'])->name('admin_create_posts');

Route::delete('/admin/{post}/posts', [PostController::class, 'destroy_posts'])->name('admin_destroy_posts');
Route::get('/admin/{post}/posts', [PostController::class, 'update_show'])->name('admin_show_update');
Route::patch('/admin/{post}/posts', [PostController::class, 'update_posts'])->name('admin_update_posts');


// USERrrr
Route::get('/ ', [PostController::class, 'index'])->name('show_posts');
Route::get('/berita ', [PostController::class, 'index'])->name('show_berita');
Route::get('/berita/{id} ', [PostController::class, 'index_detail'])->name('detail_berita');

// Route::get('/', function () {
//     return view('home');
// });
Route::get('/sejarah', function () {
    return view('about.sejarah');
});
Route::get('/romo', function () {
    return view('about.romo');
});
Route::get('/dewan-paroki', function () {
    return view('about.dewan-paroki');
});
Route::get('/kategorial', function () {
    return view('about.kategorial');
});
Route::get('/wilayah-lingkungan', function () {
    return view('about.wilayah-lingkungan');
});
Route::get('/sekretariat', function () {
    return view('sekretariat.sekretariat');
});

Route::get('/blog', function () {
    return view('information.blog-berita');
});
Route::get('/donasi', function () {
    return view('information.donasi');
});
Route::get('/kontak', function () {
    return view('information.kontak');
});
Route::get('/tes', function () {
    return view('admin.auth.login1');
});
Route::get('/admin/dashboard', function () {
    return view('admin.admin-dashboard ');
});

Route::get('/admin/kategorial', function () {
    return view('admin.admin-kategorial');
});
Route::get('/admin/dokumen', function () {
    return view('admin.admin-dokumen');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
