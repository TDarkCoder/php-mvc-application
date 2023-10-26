<?php

namespace Tests;

use TDarkCoder\Framework\Application;

trait CreatesApplication
{
    public function createApplication(): Application
    {
        $config = require_once __DIR__ . '/../bootstrap.php';

        return new Application(dirname(__DIR__), $config);
    }
}