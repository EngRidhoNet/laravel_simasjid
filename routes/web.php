<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DonasiController;
use App\Http\Controllers\JamaahController;
use App\Http\Controllers\MasjidController;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\KegiatanController;
use App\Http\Controllers\KeuanganController;
use App\Http\Controllers\PengurusController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('pages.home');
// });

Route::controller(AuthController::class)->group(function(){
    Route::get('register','register')->name('register');
    Route::post('register','registerSave')->name('register.save');
    Route::get('login', 'login')->name('login');
    Route::post('login', 'loginAction')->name('login.action');
    Route::get('logout', 'logout')->name('logout');
});

Route::middleware('auth')->group(function () {
    Route::get('dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::controller(JamaahController::class)->prefix('jamaah')->group(function () {
        Route::get('', 'index')->name('jamaah');
        Route::get('create', 'create')->name('jamaah.create');
        Route::post('store', 'store')->name('jamaah.store');
        Route::get('show/{id}', 'show')->name('jamaah.show');
        Route::get('edit/{id}', 'edit')->name('jamaah.edit');
        Route::put('edit/{id}', 'update')->name('jamaah.update');
        Route::delete('destroy/{id}', 'destroy')->name('jamaah.destroy');
    });

    Route::controller(MasjidController::class)->prefix('masjid')->group(function () {
        Route::get('', 'index')->name('masjid');
        Route::get('create', 'create')->name('masjid.create');
        Route::post('store', 'store')->name('masjid.store');
        Route::get('show/{id}', 'show')->name('masjid.show');
        Route::get('edit/{id}', 'edit')->name('masjid.edit');
        Route::put('edit/{id}', 'update')->name('masjid.update');
        Route::delete('destroy/{id}', 'destroy')->name('masjid.destroy');
    });

    Route::controller(KegiatanController::class)->prefix('kegiatan')->group(function () {
        Route::get('', 'index')->name('kegiatan');
        Route::get('create', 'create')->name('kegiatan.create');
        Route::post('store', 'store')->name('kegiatan.store');
        Route::get('show/{id}', 'show')->name('kegiatan.show');
        Route::get('edit/{id}', 'edit')->name('kegiatan.edit');
        Route::put('edit/{id}', 'update')->name('kegiatan.update');
        Route::delete('destroy/{id}', 'destroy')->name('kegiatan.destroy');
    });

    Route::controller(DonasiController::class)->prefix('donasi')->group(function () {
        Route::get('', 'index')->name('donasi');
        Route::get('create', 'create')->name('donasi.create');
        Route::post('store', 'store')->name('donasi.store');
        Route::get('show/{id}', 'show')->name('donasi.show');
        Route::get('edit/{id}', 'edit')->name('donasi.edit');
        Route::put('edit/{id}', 'update')->name('donasi.update');
        Route::delete('destroy/{id}', 'destroy')->name('donasi.destroy');
    });

    Route::controller(ArtikelController::class)->prefix('artikel')->group(function () {
        Route::get('', 'index')->name('artikel');
        Route::get('create', 'create')->name('artikel.create');
        Route::post('store', 'store')->name('artikel.store');
        Route::get('show/{id}', 'show')->name('artikel.show');
        Route::get('edit/{id}', 'edit')->name('artikel.edit');
        Route::put('edit/{id}', 'update')->name('artikel.update');
        Route::delete('destroy/{id}', 'destroy')->name('artikel.destroy');
    });

    Route::controller(KeuanganController::class)->prefix('keuangan')->group(function () {
        Route::get('', 'index')->name('keuangan');
        Route::get('create', 'create')->name('keuangan.create');
        Route::post('store', 'store')->name('keuangan.store');
        Route::get('show/{id}', 'show')->name('keuangan.show');
        Route::get('edit/{id}', 'edit')->name('keuangan.edit');
        Route::put('edit/{id}', 'update')->name('keuangan.update');
        Route::delete('destroy/{id}', 'destroy')->name('keuangan.destroy');
    });

    Route::controller(PengurusController::class)->prefix('pengurus')->group(function () {
        Route::get('', 'index')->name('pengurus');
        Route::get('create', 'create')->name('pengurus.create');
        Route::post('store', 'store')->name('pengurus.store');
        Route::get('show/{id}', 'show')->name('pengurus.show');
        Route::get('edit/{id}', 'edit')->name('pengurus.edit');
        Route::put('edit/{id}', 'update')->name('pengurus.update');
        Route::delete('destroy/{id}', 'destroy')->name('pengurus.destroy');
    });

    Route::controller(HomeController::class)->prefix('home')->group(function () {
        Route::get('', 'index')->name('pages.home');
        Route::get('about', 'about')->name('pages.about');
        Route::get('berita', 'berita')->name('pages.berita');
        Route::get('keuangan', 'keuangan')->name('pages.keuangan');
        Route::get('donasi', 'donasi')->name('pages.donasi');
    });


    Route::get('/profile', [App\Http\Controllers\AuthController::class, 'profile'])->name('profile');
});
