<?php

use App\Middleware\VerifyCsrfToken;
use App\Models\User;

return [
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