<?php

namespace App\Models;

use TDarkCoder\Framework\Database\Model;
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

    public function fullName(): string
    {
        return "$this->firstName $this->lastName";
    }

    public function table(): string
    {
        return 'users';
    }
}