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

Route::get('/', function () {
    return view('client.homepage');
})->name('homepage');

Route::get('/faq', function () {
    return view('client.faq');
})->name('faq');

Route::get('/jenjang-karir', function () {
    return view('client.jenjang_karir');
})->name('jenjang-karir');

Route::get('/laporan', function () {
    return view('client.laporan');
})->name('laporan');

Route::get('/testimonial', function () {
    return view('client.testimonial');
})->name('testimonial');

Route::get('/reload-captcha', [App\Http\Controllers\Auth\RegisterController::class, 'reloadCaptcha']);



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
