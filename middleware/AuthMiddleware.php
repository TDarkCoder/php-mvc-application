<?php

namespace App\middleware;

use TDarkCoder\Framework\Middleware;
use TDarkCoder\Framework\Request;

class AuthMiddleware implements Middleware
{
    public function handle(Request $request): bool
    {
        if (!app()->user) {
            redirect('/login');
        }

        return true;
    }
}