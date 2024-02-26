<?php

use App\Http\Controllers\DocumentController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\KategorialController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\GaleryController;
use App\Http\Controllers\GalleryCategoryController;
use App\Http\Controllers\MemberController;
use App\Models\Category;
use App\Models\Document;
use App\Models\Gallery_Category;
use App\Models\Kategorial;
use App\Models\Member;
use App\Policies\GalleryCategoryPolicy;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpKernel\Profiler\Profile;


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

Auth::routes();

Route::middleware([]);

Route::middleware(['admin'])->group(function () {

    Route::get('/admin/dashboard', [CategoryController::class, 'index'])->name('admin_dashboard');
    Route::get('/admin/posts/create', [PostController::class, 'show_create'])->name('admin_show_create');
    Route::post('/admin/posts/create', [PostController::class, 'store'])->name('admin_create_posts');

    Route::get('/admin/posts', [PostController::class, 'show_posts'])->name('admin_show_posts');
    Route::delete('/admin/{post}/posts', [PostController::class, 'destroy_posts'])->name('admin_destroy_posts');
    Route::get('/admin/{post}/posts', [PostController::class, 'update_show'])->name('admin_show_update');
    Route::patch('/admin/{post}/posts', [PostController::class, 'update_posts'])->name('admin_update_posts');

    Route::get('/admin/kategorial/create', [KategorialController::class, 'show_create'])->name('admin_showkat_create');
    Route::post('/admin/kategorial/create', [KategorialController::class, 'store'])->name('admin_create_kategorial');

    Route::get('/admin/kategorial', [KategorialController::class, 'show_kategorial'])->name('admin_show_kategorial');
    Route::delete('/admin/{kategorial}/kategorial', [KategorialController::class, 'destroy_kategorial'])->name('admin_destroy_kategorial');
    Route::get('/admin/{kategorial}/kategorial', [KategorialController::class, 'update_show'])->name('admin_showup_kategorial');
    Route::patch('/admin/{kategorial}/kategorial', [KategorialController::class, 'update_kategorial'])->name('admin_update_kategorial');

    Route::get('/admin/{kategorial}/member', [MemberController::class, 'show_create'])->name('admin_show_member');
    Route::post('/admin/{kategorial}/member', [MemberController::class, 'store'])->name('admin_create_member');
    Route::delete('/admin/{member}/member', [MemberController::class, 'destroy'])->name('admin_destroy_member');
    Route::get('/admin/{member}/member/edit', [MemberController::class, 'showupdate_member'])->name('admin_showup_member');
    Route::patch('/admin/{member}/member/edit', [MemberController::class, 'update_member'])->name('admin_edit_member');

    Route::get('/admin/dokumen', [DocumentController::class, 'show'])->name('admin_show_dokumen');
    Route::get('/admin/dokumen', [CategoryController::class, 'show_dokumen'])->name('admin_show_dok');
    Route::post('/admin/dokumen', [DocumentController::class, 'store'])->name('admin_create_dokumen');
    Route::get('/admin/dokumen/{document}/edit', [DocumentController::class, 'show_update'])->name('admin_showup_dokumen');
    Route::patch('/admin/dokumen/{document}/edit', [DocumentController::class, 'update'])->name('admin_update_dokumen');
    Route::delete('/admin/dokumen/{document}/edit', [DocumentController::class, 'destroy'])->name('admin_destroy_dokumen');


    Route::get('/admin/album/create', [GalleryCategoryController::class, 'show_create'])->name('admin_album_create');
    Route::post('/admin/album/create', [GalleryCategoryController::class, 'store'])->name('admin_create_album');

    Route::get('/admin/galeri', [GalleryCategoryController::class, 'show_album'])->name('admin_show_album');
    Route::delete('/admin/{album}/galeri', [GalleryCategoryController::class, 'destroy'])->name('admin_destroy_album');
    Route::get('/admin/{album}/galeri', [GalleryCategoryController::class, 'update_show'])->name('admin_showup_album');
    Route::patch('/admin/{album}/galeri', [GalleryCategoryController::class, 'update'])->name('admin_update_album');

    Route::get('/admin/{album}/foto', [GaleryController::class, 'show_create'])->name('admin_show_galeri');
    Route::post('/admin/{album}/foto', [GaleryController::class, 'store'])->name('admin_create_galeri');
    Route::delete('/admin/{foto}/foto', [GaleryController::class, 'destroy'])->name('admin_destroy_foto');
});
// USERrrr



Route::middleware(['auth'])->group(function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/ ', [PostController::class, 'index'])->name('show_posts');
    Route::get('/romo', [MemberController::class, 'show_romo'])->name('show_romo');
    Route::get('/sekretariat', [DocumentController::class, 'index'])->name('show_dokumen');
    Route::get('/dewan-paroki', [MemberController::class, 'show_dpp'])->name('show_dpp');
    Route::get('/berita ', [PostController::class, 'index'])->name('show_berita');
    Route::get('/berita/{id} ', [PostController::class, 'index_detail'])->name('detail_berita');
    Route::get('/kategorial', [KategorialController::class, 'index'])->name('show_kategorial');
    Route::get('/kategorial/{id}', [KategorialController::class, 'index_detail'])->name('show_detail_kategorial');
    Route::get('/kontak', function () {
        return view('information.kontak');
    });
});
// Route::get('/', function () {
//     return view('home');
// });
// Route::get('/sejarah', function () {
//     return view('about.sejarah');
// });
// Route::get('/romo', function () {
//     return view('about.romo');
// });

// Route::get('/wilayah-lingkungan', function () {
//     return view('about.wilayah-lingkungan');
// });

// Route::get('/blog', function () {
//     return view('information.blog-berita');
// });
// Route::get('/donasi', function () {
//     return view('information.donasi');
// });
// Route::get('/tes', function () {
//     return view('admin.auth.login1');
// });
// Route::get('/admin/dashboard', function () {
//     return view('admin.admin-dashboard ');
// });

// Route::get('/admin/kategorial', function () {
//     return view('admin.admin-kategorial');
// });
// Route::get('/admin/dokumen', function () {
//     return view('admin.admin-dokumen');
// });


