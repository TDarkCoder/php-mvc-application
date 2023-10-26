<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
    private const DEFAULT_STRING = 'education';

    public function testStringsEqual()
    {
        $string = self::DEFAULT_STRING;

        $this->assertSame(self::DEFAULT_STRING, $string);
    }
}