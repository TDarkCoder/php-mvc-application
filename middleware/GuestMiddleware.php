<?php

namespace App\middleware;

use TDarkCoder\Framework\Middleware;
use TDarkCoder\Framework\Request;

class GuestMiddleware implements Middleware
{
    public function handle(Request $request): bool
    {
        if (app()->user) {
            redirect('/home');
        }

        return true;
    }
}