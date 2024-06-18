<?php

namespace App\UseCases\Commands;

use App\Domain\AuthDomainCreateUser;
use App\Domain\AuthDomainGenerateToken;
use Illuminate\Support\Facades\Validator;

class AuthCommandSignUp
{
    public function __construct(
        private readonly AuthDomainCreateUser $createUser,
        private readonly AuthDomainGenerateToken $generateToken
    ) {
    }

    public function handle(array $data)
    {
        $validator = Validator::make($data, [
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8'],
            'name' => ['required', 'string', 'max:255'],
        ]);

        if ($validator->fails()) {
            return $validator->errors();
        }

        $user = $this->createUser->do($data['name'], $data['email'], $data['password']);

        return $this->generateToken->do($user);
    }
}
