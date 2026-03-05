<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pengumumanController;

Route::get('/', function () {
    return view('ringkasan');
});

Route::get('/piket', function () {
    return view('piket');
});

Route::get('/siswa', function () {
    return view('siswa');
});
    
Route::resource('/pengumuman', pengumumanController::class);

Route::get('/jadwal', function () {
    return view('jadwal');
});
