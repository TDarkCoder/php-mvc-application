<?php

namespace App\Controllers;

use App\Middleware\AuthMiddleware;
use App\Middleware\GuestMiddleware;
use App\Models\User;
use Exception;
use TDarkCoder\Framework\Http\Controller;
use TDarkCoder\Framework\Http\Request;

class AuthController extends Controller
{
    protected array $middlewares = [
        AuthMiddleware::class => [
            'logout',
        ],
        GuestMiddleware::class => [
            'register',
            'login',
        ],
    ];

    /**
     * @throws Exception
     */
    public function login(Request $request): string
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:8',
        ]);

        $user = User::findOne(['email' => $request->email]);

        if (!$user || !password_verify($request->password, $user->password)) {
            session()->setFlash('error', 'Incorrect email or password');

            redirect($request->previousUrl());
        }

        $user->authorizeToken();

        redirect('/home');
    }

    public function logout(): void
    {
        app()->user->logout();

        redirect('/home');
    }

    /**
     * @throws Exception
     */
    public function register(Request $request): string
    {
        $request->validate([
            'email' => 'required|email|unique:' . User::class,
            'firstName' => 'required',
            'lastName' => 'required',
            'password' => 'required|min:8',
            'confirmPassword' => 'required|match:password',
        ]);

        $request->password = password_hash($request->password, PASSWORD_DEFAULT);

        $user = User::create($request->only([
            'firstName',
            'lastName',
            'email',
            'password',
        ]));

        $user->authorizeToken();
        session()->setFlash('success', 'Thank you for your registration!');

        redirect('/home');
    }
}