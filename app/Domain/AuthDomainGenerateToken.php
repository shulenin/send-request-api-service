<?php

namespace App\Domain;

use App\Models\User;

class AuthDomainGenerateToken
{
    public function do(User $user): array
    {
        $token = $user->createToken('authToken')->plainTextToken;

        return ['token' => $token];
    }
}
