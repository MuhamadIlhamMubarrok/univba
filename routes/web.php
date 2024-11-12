<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\galleryController;
use Illuminate\Support\Facades\Route;

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

Route::get('/clear', function () {
    Artisan::call('config:cache');
    Artisan::call('config:clear');
    Artisan::call('view:clear');
    return 'Cleared!';
});

Route::namespace('Home')->group(function () {
    Route::get('/', [App\Http\Controllers\FrontendController\HomeController::class, 'index'])->name('fe-home');
    Route::get('/sejarah-singkat', [App\Http\Controllers\FrontendController\HomeController::class, 'sejarah'])->name('fe-sejarah');
    Route::get('/visi-misi', [App\Http\Controllers\FrontendController\HomeController::class, 'visimisi'])->name('fe-visimisi');
    Route::get('/struktur-organisasi', [App\Http\Controllers\FrontendController\HomeController::class, 'strukturorganisasi'])->name('fe-strukturorganisasi');
    Route::get('/page/{id}', [App\Http\Controllers\FrontendController\HomeController::class, 'pageShow'])->name('fe-page');
    Route::get('/brosur', [App\Http\Controllers\FrontendController\HomeController::class, 'brosur'])->name('fe-brosur');

    Route::get('/kontak', [App\Http\Controllers\FrontendController\HomeController::class, 'kontak'])->name('fe-kontak');

    Route::get('/pendaftaran', [App\Http\Controllers\FrontendController\HomeController::class, 'showForm'])->name('registration.show');
    Route::post('/pendaftaran/simpan', [App\Http\Controllers\FrontendController\HomeController::class, 'storeRegistration'])->name('registration.store');
});

Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/login', [AuthController::class, 'dologin'])->name('login.post');
});
Route::middleware('auth')->group(function () {
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('/dashboard', [AuthController::class, 'dashboard'])->name('dashboard');

    Route::get('/gallery', [galleryController::class, 'index'])->name('gallery.index');
    Route::get('/gallery/tambah-foto', [galleryController::class, 'create'])->name('gallery.create');
    Route::post('/gallery/tambah-foto', [galleryController::class, 'store'])->name('gallery.store');
    Route::delete('/gallery/delete-foto/{id}', [galleryController::class, 'destroy'])->name('gallery.delete');
    Route::get('/gallery/{id}/edit', [GalleryController::class, 'show'])->name('gallery.edit');
    Route::put('/gallery/update-foto/{id}', [GalleryController::class, 'update'])->name('gallery.update');

    Route::get('/data-pendaftaran', [App\Http\Controllers\BackendController\POController::class, 'daftar'])->name('daftar');
    Route::get('/data-pendaftaran/detil/{id}', [App\Http\Controllers\BackendController\POController::class, 'detil'])->name('daftar.detil');
    Route::get('/daftar/{id}', [App\Http\Controllers\BackendController\POController::class, 'hapus'])->name('daftar.hapus');
    Route::get('/daftar/cetak', [App\Http\Controllers\BackendController\POController::class, 'cetak'])->name('daftar.cetak');

    Route::get('/beranda', [App\Http\Controllers\BackendController\BerandaController::class, 'index'])->name('beranda');
    Route::get('/beranda/create', [App\Http\Controllers\BackendController\BerandaController::class, 'create'])->name('beranda.create');
    Route::post('/beranda', [App\Http\Controllers\BackendController\BerandaController::class, 'store'])->name('beranda.store');
    Route::get('beranda/edit', [App\Http\Controllers\BackendController\BerandaController::class, 'edit'])->name('beranda.edit');
    Route::delete('/beranda', [App\Http\Controllers\BackendController\BerandaController::class, 'destroy'])->name('beranda.destroy');

    Route::get('/menu', [App\Http\Controllers\BackendController\MenuController::class, 'index'])->name('menu');
    Route::get('/menu/create', [App\Http\Controllers\BackendController\MenuController::class, 'create'])->name('menu.create');
    Route::post('/menu', [App\Http\Controllers\BackendController\MenuController::class, 'store'])->name('menu.store');
    Route::get('/menu/edit/{id}', [App\Http\Controllers\BackendController\MenuController::class, 'edit'])->name('menu.edit');
    Route::put('/menu/{id}', [App\Http\Controllers\BackendController\MenuController::class, 'update'])->name('menu.update');
    Route::delete('/menu/{id}', [App\Http\Controllers\BackendController\MenuController::class, 'destroy'])->name('menu.destroy');
    Route::get('menu/toggle-active/{id}', [App\Http\Controllers\BackendController\MenuController::class, 'toggleActive'])->name('menu.toggle-active');

    Route::get('/page', [App\Http\Controllers\BackendController\HalamanController::class, 'index'])->name('pages');
    Route::get('/page/create', [App\Http\Controllers\BackendController\HalamanController::class, 'create'])->name('pages.create');
    Route::post('/page', [App\Http\Controllers\BackendController\HalamanController::class, 'store'])->name('pages.store');
    Route::get('page/edit', [App\Http\Controllers\BackendController\HalamanController::class, 'edit'])->name('pages.edit');
    Route::delete('/page', [App\Http\Controllers\BackendController\HalamanController::class, 'destroy'])->name('pages.destroy');

    Route::get('/profile', [AuthController::class, 'profile'])->name('profile');
    Route::put('/profile/update/{id}', [AuthController::class, 'updateProfile'])->name('profile.update');
    Route::get('/change-password', [AuthController::class, 'changePassword'])->name('changePassword');
    Route::post('/change-password', [AuthController::class, 'doChangePassword'])->name('change.password');
});
