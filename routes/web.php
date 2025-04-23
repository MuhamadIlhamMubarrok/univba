<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BackendController\BerandaController;
use App\Http\Controllers\BackendController\BeritaController;
use App\Http\Controllers\BackendController\HalamanController;
use App\Http\Controllers\BackendController\MenuController;
use App\Http\Controllers\BackendController\POController;
use App\Http\Controllers\BackendController\SettingController;
use App\Http\Controllers\FrontendController\HomeController;
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
    Route::get('/event-kampus', [App\Http\Controllers\FrontendController\HomeController::class, 'eventKampus'])->name('fe-event-kampus');
    Route::get('/kegiatan-mahasiswa', [App\Http\Controllers\FrontendController\HomeController::class, 'kegiatanKampus'])->name('fe-kegiatan-kampus');
    Route::get('/fasilitas-kampus', [App\Http\Controllers\FrontendController\HomeController::class, 'fasilitasKampus'])->name('fe-fasilitas-kampus');
    Route::get('/sejarah-singkat', [App\Http\Controllers\FrontendController\HomeController::class, 'sejarah'])->name('fe-sejarah');
    Route::get('/visi-misi', [App\Http\Controllers\FrontendController\HomeController::class, 'visimisi'])->name('fe-visimisi');
    Route::get('/struktur-organisasi', [App\Http\Controllers\FrontendController\HomeController::class, 'strukturorganisasi'])->name('fe-strukturorganisasi');
    Route::get('/page/{id}', [App\Http\Controllers\FrontendController\HomeController::class, 'pageShow'])->name('fe-page');
    Route::get('/brosur', [App\Http\Controllers\FrontendController\HomeController::class, 'brosur'])->name('fe-brosur');
    Route::post('/kontak-form', [App\Http\Controllers\FrontendController\HomeController::class, 'storeKontak'])->name('store.fe-kontak');
    Route::get('/biaya-jurusan', [App\Http\Controllers\FrontendController\HomeController::class, 'biayajurusan'])->name('fe.biayajurusan');

    Route::get('/detail-berit/{id}', [HomeController::class, 'detailberita'])->name('fe-detailberita');


    Route::get('/kontak-form', [App\Http\Controllers\FrontendController\HomeController::class, 'kontak'])->name('fe-kontak');

    Route::get('/pendaftaran', [App\Http\Controllers\FrontendController\HomeController::class, 'showForm'])->name('registration.show');
    Route::post('/pendaftaran/simpan', [App\Http\Controllers\FrontendController\HomeController::class, 'storeRegistration'])->name('registration.store');
    Route::get('/pendaftaran/success/{no_daftar}', [App\Http\Controllers\FrontendController\HomeController::class, 'showSuccessPage'])->name('registration.success');

    Route::get('/pendaftaran/cetak/{no_daftar}', [App\Http\Controllers\FrontendController\HomeController::class, 'cetak'])->name('cetak.confirm');
    Route::get('/test-error', function () {
    abort(500); // Memicu error 500
});
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

    Route::get('/kontak', [galleryController::class, 'kontak'])->name('kontak.index');
    Route::delete('/kontak/{id}', [galleryController::class, 'destroyKontak'])->name('kontak.destroy');

    Route::get('/data-pendaftaran', [POController::class, 'daftar'])->name('daftar');
    Route::get('/data-pendaftaran/detil/{id}', [POController::class, 'detil'])->name('daftar.detil');
    Route::get('/data-pendaftaran/{id}', [POController::class, 'hapus'])->name('daftar.hapus');
    Route::get('/data-pendaftaran/cetak', [POController::class, 'cetak'])->name('daftar.cetak');

    Route::get('/menu', [MenuController::class, 'index'])->name('menu');
    Route::get('/menu/create', [MenuController::class, 'create'])->name('menu.create');
    Route::post('/menu', [MenuController::class, 'store'])->name('menu.store');
    Route::get('/menu/edit/{id}', [MenuController::class, 'edit'])->name('menu.edit');
    Route::put('/menu/{id}', [MenuController::class, 'update'])->name('menu.update');
    Route::delete('/menu/{id}', [MenuController::class, 'destroy'])->name('menu.destroy');

    Route::get('/pages', [HalamanController::class, 'index'])->name('pages');
    Route::get('/pages/create', [HalamanController::class, 'create'])->name('pages.create');
    Route::post('/pages', [HalamanController::class, 'store'])->name('pages.store');
    Route::get('pages/edit/{id}', [HalamanController::class, 'edit'])->name('pages.edit');
    Route::put('pages/{id}', [HalamanController::class, 'update'])->name('pages.update');
    Route::delete('/pages/{id}', [HalamanController::class, 'destroy'])->name('pages.destroy');


    Route::get('/table-user', [AuthController::class, 'index'])->name('user.index');
    Route::get('/create-user', [AuthController::class, 'create'])->name('user.create');
    Route::post('/create-user', [AuthController::class, 'store'])->name('user.store');
    Route::delete('/delete-user/{id}', [AuthController::class, 'delete'])->name('user.delete');

    Route::get('/settings', [SettingController::class, 'index'])->name('settings');
    Route::get('/settings/create', [SettingController::class, 'create'])->name('settings.create');
    Route::post('/settings', [SettingController::class, 'store'])->name('settings.store');
    Route::get('/settings/edit/{id}', [SettingController::class, 'edit'])->name('settings.edit');
    Route::put('/settings/{id}', [SettingController::class, 'update'])->name('settings.update');
    Route::delete('/settings/{id}', [SettingController::class, 'destroy'])->name('settings.destroy');
    Route::get('settings/{id}/toggle-status', [SettingController::class, 'toggleStatus'])->name('settings.toggleStatus');

    Route::get('/berita', [BeritaController::class, 'index'])->name('berita');
    Route::get('/berita/create', [BeritaController::class, 'create'])->name('berita.create');
    Route::post('/berita/create', [BeritaController::class, 'store'])->name('berita.store');
    Route::get('berita/edit/{id}', [BeritaController::class, 'edit'])->name('berita.edit');
    Route::put('berita/{id}', [BeritaController::class, 'update'])->name('berita.update');
    Route::delete('/berita/{id}', [BeritaController::class, 'destroy'])->name('berita.destroy');

    Route::get('/profile', [AuthController::class, 'profile'])->name('profile');
    Route::put('/profile/update/{id}', [AuthController::class, 'updateProfile'])->name('profile.update');
    Route::get('/change-password', [AuthController::class, 'changePassword'])->name('changePassword');
    Route::post('/change-password', [AuthController::class, 'doChangePassword'])->name('change.password');
});
