<?php

use App\controllers\AuthController;
use TDarkCoder\Framework\Application;

require_once __DIR__ . '/../vendor/autoload.php';
$config = require_once __DIR__ . '/../bootstrap.php';

$app = new Application(dirname(__DIR__), $config);

$app->router->get('/', 'home');

$app->run();