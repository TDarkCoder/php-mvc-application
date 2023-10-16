<?php

use App\models\User;

return [
    'database' => [
        'dsn' => env('MYSQL_DSN'),
        'username' => env('MYSQL_USERNAME', 'root'),
        'password' => env('MYSQL_PASSWORD', 'root'),
    ],
    'user' => User::class,
];