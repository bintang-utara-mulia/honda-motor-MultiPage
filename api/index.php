<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Vercel Serverless Entry Point
|--------------------------------------------------------------------------
|
| File ini menjadi entry point Laravel ketika dijalankan melalui Vercel.
|
*/

// ---------------------------------------------------------
// 1. Buat folder storage yang bisa ditulis di environment Vercel
// ---------------------------------------------------------

$storageDirs = [
    '/tmp/storage/app',
    '/tmp/storage/app/public',
    '/tmp/storage/framework',
    '/tmp/storage/framework/cache',
    '/tmp/storage/framework/cache/data',
    '/tmp/storage/framework/sessions',
    '/tmp/storage/framework/testing',
    '/tmp/storage/framework/views',
    '/tmp/storage/logs',
    '/tmp/storage/bootstrap',
    '/tmp/storage/bootstrap/cache',
];

foreach ($storageDirs as $dir) {
    if (!is_dir($dir)) {
        @mkdir($dir, 0755, true);
    }
}

// ---------------------------------------------------------
// 2. Atur environment Laravel untuk Vercel
// ---------------------------------------------------------

putenv('APP_ENV=production');
$_ENV['APP_ENV'] = 'production';
$_SERVER['APP_ENV'] = 'production';

putenv('APP_DEBUG=false');
$_ENV['APP_DEBUG'] = 'false';
$_SERVER['APP_DEBUG'] = 'false';

putenv('APP_STORAGE=/tmp/storage');
$_ENV['APP_STORAGE'] = '/tmp/storage';
$_SERVER['APP_STORAGE'] = '/tmp/storage';

// ---------------------------------------------------------
// 3. Pastikan Laravel menggunakan session array
// ---------------------------------------------------------

putenv('SESSION_DRIVER=array');
$_ENV['SESSION_DRIVER'] = 'array';
$_SERVER['SESSION_DRIVER'] = 'array';

// ---------------------------------------------------------
// 4. Arahkan cache Laravel ke folder /tmp
// ---------------------------------------------------------

putenv('VIEW_COMPILED_PATH=/tmp/storage/framework/views');
$_ENV['VIEW_COMPILED_PATH'] = '/tmp/storage/framework/views';
$_SERVER['VIEW_COMPILED_PATH'] = '/tmp/storage/framework/views';

// ---------------------------------------------------------
// 5. Load Laravel
// ---------------------------------------------------------

$app = require __DIR__ . '/../bootstrap/app.php';

// ---------------------------------------------------------
// 6. Jalankan request
// ---------------------------------------------------------

$request = Request::capture();

$app->handleRequest($request);