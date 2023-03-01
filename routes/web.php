<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return Inertia::render('Dashboard');
    })->name('dashboard');
});

Route::get('beranda/home', function () {
    return Inertia::render('Beranda/Home');
})->name('beranda.home');

Route::get('beranda/search', function () {
    return Inertia::render('Beranda/Result');
})->name('beranda.result');

Route::get('beranda/detail_tafsir', function () {
    return Inertia::render('Beranda/DetailTafsir');
})->name('beranda.detail-tafsir');

Route::get('beranda/detail_surah', function () {
    return Inertia::render('Beranda/DetailSurah');
})->name('beranda.detail-surah');