<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pengumumanController;
use App\Http\Controllers\siswaController;

Route::get('/', function () {
    return view('ringkasan');
});

Route::get('/piket', function () {
    return view('piket');
});

Route::get('/siswa/search', [siswaController::class, 'search'])->name('siswa.search');
Route::resource('/siswa', siswaController::class);
    
Route::resource('/pengumuman', pengumumanController::class);

Route::get('/jadwal', function () {
    return view('jadwal');
});
