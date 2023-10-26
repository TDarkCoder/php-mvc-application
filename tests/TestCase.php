<?php

namespace Tests;

use PHPUnit\Framework\TestCase as BaseTestCase;
use TDarkCoder\Framework\Application;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication;
}