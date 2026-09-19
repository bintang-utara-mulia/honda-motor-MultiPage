<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/motor', function () {
    return view('motor');
})->name('motor');

Route::get('/tentang', function () {
    return view('tentang');
})->name('tentang');

Route::get('/promo', function () {
    return view('promo');
})->name('promo');

Route::get('/testimoni', function () {
    return view('testimoni');
})->name('testimoni');

Route::get('/faq', function () {
    return view('faq');
})->name('faq');

Route::get('/kontak', function () {
    return view('kontak');
})->name('kontak');