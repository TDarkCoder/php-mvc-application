<?php

use App\Middleware\VerifyCsrfToken;
use App\Models\User;

return [
    'app' => [
        'name' => env('APP_NAME', 'PHP MVC'),
        'url' => env('APP_URL', 'localhost'),
    ],
    'database' => [
        'dsn' => env('DB_DSN'),
        'username' => env('DB_USERNAME', 'root'),
        'password' => env('DB_PASSWORD', 'root'),
    ],
    'middlewares' => [
        VerifyCsrfToken::class,
    ],
    'user' => User::class,
];