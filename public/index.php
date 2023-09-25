<?php

use App\controllers\AuthController;
use App\middleware\AuthMiddleware;
use App\middleware\GuestMiddleware;
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
$app->router->get('/register', [AuthController::class, 'register']);
$app->router->post('/register', [AuthController::class, 'register']);
$app->router->get('/login', [AuthController::class, 'login']);
$app->router->post('/login', [AuthController::class, 'login']);
$app->router->get('/logout', [AuthController::class, 'logout']);

$app->run();