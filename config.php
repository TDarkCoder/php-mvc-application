<?php

use App\models\User;

return [
    'database' => [
        'dsn' => env('DB_DSN'),
        'username' => env('DB_USERNAME', 'root'),
        'password' => env('DB_PASSWORD', 'root'),
    ],
    'user' => User::class,
];