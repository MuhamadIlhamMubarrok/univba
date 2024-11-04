<?php

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


Route::get('/clear', function() {

Artisan::call('config:cache');
Artisan::call('config:clear');
Artisan::call('view:clear');
return "Cleared!";
});

Route::namespace('Home')->group(function() {

    Route::get('/', [App\Http\Controllers\FrontendController\HomeController::class, 'index'])->name('fe-home');
    Route::get('/sejarah-singkat', [App\Http\Controllers\FrontendController\HomeController::class, 'sejarah'])->name('fe-sejarah');
    Route::get('/visi-misi', [App\Http\Controllers\FrontendController\HomeController::class, 'visimisi'])->name('fe-visimisi');
    Route::get('/struktur-organisasi', [App\Http\Controllers\FrontendController\HomeController::class, 'strukturorganisasi'])->name('fe-strukturorganisasi');
    Route::get('/page/{id}', [App\Http\Controllers\FrontendController\HomeController::class, 'showPage'])->name('fe-page');
    
    Route::get('/kontak', [App\Http\Controllers\FrontendController\HomeController::class, 'kontak'])->name('fe-kontak');
    
    Route::get('/pendaftaran', [App\Http\Controllers\FrontendController\HomeController::class, 'showForm'])->name('registration.show');
    Route::get('/pendaftaran/simpan', [App\Http\Controllers\FrontendController\HomeController::class, 'storeRegistration'])->name('registration.store');

});