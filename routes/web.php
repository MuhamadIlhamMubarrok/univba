<?php

use App\Http\Controllers\AuthController;
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
    Route::get('/profile', [AuthController::class, 'profile'])->name('profile');
    Route::put('/profile/update/{id}', [AuthController::class, 'updateProfile'])->name('profile.update');
    Route::get('/change-password', [AuthController::class, 'changePassword'])->name('changePassword');
    Route::post('/change-password', [AuthController::class, 'doChangePassword'])->name('change.password');
});
