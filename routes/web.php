<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pengumumanController;
use App\Http\Controllers\siswaController;
use App\Http\Controllers\authController;
use App\Http\Controllers\PiketController;

// halaman public (guest & admin)
Route::get('/', function () {
    return view('ringkasan');
});

Route::get('/piket', [PiketController::class, 'index'])->name('piket.index');

    // halaman public yang bisa diakses
Route::get('/siswa', [siswaController::class, 'index'])->name('siswa.index');
Route::get('/siswa/search', [siswaController::class, 'search'])->name('siswa.search');
Route::get('/siswa/{id}', [siswaController::class, 'show'])->whereNumber('id')->name('siswa.show');

    // halaman public yang bisa diakses
Route::get('/pengumuman', [pengumumanController::class, 'index'])->name('pengumuman.index');
Route::get('/pengumuman/{id}', [pengumumanController::class, 'show'])->whereNumber('id')->name('pengumuman.show');


Route::get('/jadwal', function () {
    return view('jadwal');  
});

Route::get('/login', [authController::class, 'showLogin']);
Route::post('/login', [authController::class, 'login']);
Route::post('/logout', [authController::class, 'logout']);

// halaman admin only
Route::middleware(['auth'])->group(function() {

    Route::get('/siswa/create', [siswaController::class, 'create'])->name('siswa.create');
    Route::post('/siswa', [siswaController::class, 'store'])->name('siswa.store');

    Route::get('/siswa/edit/{id}', [siswaController::class, 'edit'])->name('siswa.edit');
    Route::put('/siswa/{id}', [siswaController::class, 'update'])->name('siswa.update');

    Route::delete('/siswa/{id}', [siswaController::class, 'destroy'])->name('siswa.destroy');
});

Route::middleware(['auth'])->group(function() {
    Route::get('/piket/create', [piketController::class, 'create'])->name('piket.create');
    Route::post('/piket', [piketController::class, 'store'])->name('piket.store');
});

Route::middleware(['auth'])->group(function() {

    Route::get('/pengumuman/create', [pengumumanController::class, 'create'])->name('pengumuman.create');
    Route::post('/pengumuman', [pengumumanController::class, 'store'])->name('pengumuman.store');

    Route::get('/pengumuman/edit/{id}', [pengumumanController::class, 'edit'])->name('pengumuman.edit');
    Route::put('/pengumuman/{id}', [pengumumanController::class, 'update'])->name('pengumuman.update');

    Route::delete('/pengumuman/{id}', [pengumumanController::class, 'destroy'])->name('pengumuman.destroy');
});