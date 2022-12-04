<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TentangController;
use App\Http\Controllers\Auth\RegisterController;

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

Route::get('/', function () {
<<<<<<< HEAD
    return view('layouts.template');
=======
    return view('client.homepage');
})->name('homepage');

// Route::get('/faq-home', function () {
//     return view('client.faq');
// })->name('faq.homepage');

// Route::get('/jenjang-karir', function () {
//     return view('client.jenjang_karir');
// })->name('jenjang-karir');

// Route::get('/laporan', function () {
//     return view('client.laporan');
// })->name('laporan');

// Route::get('/testimonial', function () {
//     return view('client.testimonial');
// })->name('testimonial');

Route::get('/reload-captcha', [RegisterController::class, 'reloadCaptcha']);

Route::prefix('beranda')->group(function () {
    Route::get('/', [HomeController::class, 'beranda'])->name('beranda-homepage');
    Route::get('/faq', [HomeController::class, 'faq'])->name('faq-homepage');
    Route::get('/jenjang-karir', [HomeController::class, 'jenjang_karir'])->name('jenjang-karir-homepage');
    Route::get('/laporan', [HomeController::class, 'laporan'])->name('laporan-homepage');
    Route::get('/testimonial', [HomeController::class, 'latestimonialporan'])->name('testimonial-homepage');

});


Route::middleware(['auth'])->group(function () {
    Route::middleware(['admin'])->group(function () {
        Route::resource('faq', FaqController::class)->only(['index','update','destroy','store']);
        Route::resource('about', TentangController::class);
        Route::get('/home', [HomeController::class, 'index'])->name('home');
    });
>>>>>>> 25629597844639583b75a6878918d7d22a80265b
});

Auth::routes();

