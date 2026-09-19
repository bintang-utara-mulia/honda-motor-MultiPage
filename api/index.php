<?php

// Laravel Vercel Serverless Entry Point

$basePath = dirname(__DIR__);

/*
|--------------------------------------------------------------------------
| Temporary Storage
|--------------------------------------------------------------------------
*/

$tmpStorage = '/tmp/storage';

$dirs = [
    $tmpStorage,
    $tmpStorage . '/app',
    $tmpStorage . '/app/public',
    $tmpStorage . '/framework',
    $tmpStorage . '/framework/cache',
    $tmpStorage . '/framework/cache/data',
    $tmpStorage . '/framework/sessions',
    $tmpStorage . '/framework/views',
    $tmpStorage . '/framework/testing',
    $tmpStorage . '/logs',
];

foreach ($dirs as $dir) {
    if (!is_dir($dir)) {
        @mkdir($dir, 0775, true);
    }
}

/*
|--------------------------------------------------------------------------
| Environment untuk Vercel
|--------------------------------------------------------------------------
*/

function set_serverless_env($key, $value)
{
    putenv("{$key}={$value}");
    $_ENV[$key] = $value;
    $_SERVER[$key] = $value;
}

set_serverless_env(
    'APP_ENV',
    getenv('APP_ENV') ?: 'production'
);

set_serverless_env(
    'APP_DEBUG',
    getenv('APP_DEBUG') ?: 'false'
);

set_serverless_env(
    'LOG_CHANNEL',
    getenv('LOG_CHANNEL') ?: 'stderr'
);

set_serverless_env(
    'CACHE_STORE',
    getenv('CACHE_STORE') ?: 'array'
);

set_serverless_env(
    'SESSION_DRIVER',
    getenv('SESSION_DRIVER') ?: 'array'
);

set_serverless_env(
    'QUEUE_CONNECTION',
    getenv('QUEUE_CONNECTION') ?: 'sync'
);

/*
|--------------------------------------------------------------------------
| Laravel Cache
|--------------------------------------------------------------------------
*/

set_serverless_env(
    'APP_CONFIG_CACHE',
    '/tmp/config.php'
);

set_serverless_env(
    'APP_EVENTS_CACHE',
    '/tmp/events.php'
);

set_serverless_env(
    'APP_PACKAGES_CACHE',
    '/tmp/packages.php'
);

set_serverless_env(
    'APP_ROUTES_CACHE',
    '/tmp/routes.php'
);

set_serverless_env(
    'APP_SERVICES_CACHE',
    '/tmp/services.php'
);

set_serverless_env(
    'VIEW_COMPILED_PATH',
    $tmpStorage . '/framework/views'
);

/*
|--------------------------------------------------------------------------
| Composer Autoload
|--------------------------------------------------------------------------
*/

require $basePath . '/vendor/autoload.php';

/*
|--------------------------------------------------------------------------
| Bootstrap Laravel
|--------------------------------------------------------------------------
*/

$app = require_once $basePath . '/bootstrap/app.php';

/*
|--------------------------------------------------------------------------
| Gunakan Storage /tmp
|--------------------------------------------------------------------------
*/

$app->useStoragePath($tmpStorage);

/*
|--------------------------------------------------------------------------
| Jalankan Laravel
|--------------------------------------------------------------------------
*/

$app->handleRequest(
    \Illuminate\Http\Request::capture()
);