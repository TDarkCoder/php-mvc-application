<?php

use Dotenv\Dotenv;


$env = Dotenv::createImmutable(__DIR__);
$env->load();

return require_once __DIR__ . '/config.php';
