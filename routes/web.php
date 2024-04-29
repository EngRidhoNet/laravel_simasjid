<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\JamaahController;
use App\Http\Controllers\KegiatanController;
use App\Http\Controllers\MasjidController;

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

Route::get('/', function () {
    return view('welcome');
});

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

    Route::get('/profile', [App\Http\Controllers\AuthController::class, 'profile'])->name('profile');
});
