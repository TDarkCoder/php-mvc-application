<?php

namespace App\Middleware;

use TDarkCoder\Framework\Http\Middleware;
use TDarkCoder\Framework\Http\Request;

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