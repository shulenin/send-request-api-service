<?php

namespace App\Domain;

use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthDomainCreateUser
{
    public function do(string $name, string $email, string $password)
    {
        return User::query()->create([
            'name' => $name,
            'email' => $email,
            'password' => Hash::make($password),
        ]);
    }
}
