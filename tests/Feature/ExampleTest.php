<?php

namespace Tests\Feature;

use Tests\TestCase;

class ExampleTest extends TestCase
{
    public function testApplicationResponse()
    {
        $this->assertNull($this->createApplication()->user);
    }
}