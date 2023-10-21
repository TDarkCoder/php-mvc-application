<?php

namespace App\Middleware;

use TDarkCoder\Framework\Http\Middleware\VerifyCsrfToken as VerifyToken;

class VerifyCsrfToken extends VerifyToken
{
    protected array $except = [];
}