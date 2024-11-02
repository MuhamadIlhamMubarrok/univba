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

});