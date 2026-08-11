<?php

use Illuminate\Support\Facades\Route;

// Halaman utama - Motor Honda
Route::get('/', function () {
    return view('motor');
});

// Halaman Motor Honda
Route::get('/motor', function () {
    return view('motor');
});