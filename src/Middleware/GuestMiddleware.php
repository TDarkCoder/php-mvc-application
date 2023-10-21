<?php

namespace App\Middleware;

use TDarkCoder\Framework\Http\Middleware;
use TDarkCoder\Framework\Http\Request;

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