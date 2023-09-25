<?php

namespace App\models;

use App\services\AuthorizeTokens;
use TDarkCoder\Framework\Model;

class User extends Model
{
    use AuthorizeTokens;

    protected array $fillable = [
        'email',
        'firstName',
        'lastName',
        'email',
        'password',
    ];

    public function table(): string
    {
        return 'users';
    }

    public function fullName(): string
    {
        return "$this->firstName $this->lastName";
    }
}