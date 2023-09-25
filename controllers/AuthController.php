<?php

namespace App\controllers;

use App\middleware\AuthMiddleware;
use App\middleware\GuestMiddleware;
use App\models\User;
use Exception;
use TDarkCoder\Framework\Controller;
use TDarkCoder\Framework\Request;

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
    public function register(Request $request)
    {
        if ($request->isGet()) {
            return view('register');
        }

        $validation = $request->validate([
            'email' => 'required|email|unique:' . User::class,
            'firstName' => 'required',
            'lastName' => 'required',
            'password' => 'required|min:8',
            'confirmPassword' => 'required|match:password',
        ]);

        if (!$validation) {
            return view('register');
        }

        $request->password = password_hash($request->password, PASSWORD_DEFAULT);

        $user = User::create($request->only([
            'firstName',
            'lastName',
            'email',
            'password',
        ]));

        $user->authorizeToken();

        redirect('/home');
    }

    /**
     * @throws Exception
     */
    public function login(Request $request): string
    {
        if ($request->isGet()) {
            return view('login');
        }

        $validation = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:8',
        ]);

        if (!$validation) {
            return view('login');
        }

        $user = User::findOne(['email' => $request->email]);

        if (!$user || !password_verify($request->password, $user->password)) {
            app()->session->set('error', 'Incorrect email or password', true);

            return view('login');
        }

        $user->authorizeToken();

        redirect('/home');
    }

    public function logout(): void
    {
        app()->user->logout();

        redirect('/home');
    }
}