<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('motor');
});

Route::get('/motor', function () {
    return view('motor');
});