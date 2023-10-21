<?php

use App\Controllers\AuthController;
use App\Middleware\AuthMiddleware;
use App\Middleware\GuestMiddleware;
use TDarkCoder\Framework\Application;

require_once __DIR__ . '/../vendor/autoload.php';
$config = require_once __DIR__ . '/../bootstrap.php';

$app = new Application(dirname(__DIR__), $config);

$app->router
    ->get('/', 'home')
    ->middleware(GuestMiddleware::class);
$app
    ->router
    ->get('/home', 'index')
    ->middleware(AuthMiddleware::class);
$app->router->get('/register', 'register');
$app->router->post('/register', [AuthController::class, 'register']);
$app->router->get('/login', 'login');
$app->router->post('/login', [AuthController::class, 'login']);
$app->router->get('/logout', [AuthController::class, 'logout']);

$app->run();