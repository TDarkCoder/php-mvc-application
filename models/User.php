<?php

namespace App\models;

use TDarkCoder\Framework\Model;
use TDarkCoder\Framework\Services\AccessToken\AuthorizeTokens;

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