<?php

namespace App\Http\Controllers;

use App\UseCases\Commands\AuthCommandSignUp;
use Illuminate\Http\Request;
use OpenApi\Attributes\JsonContent;
use OpenApi\Attributes\MediaType;
use OpenApi\Attributes\Post;
use OpenApi\Attributes\Property;
use OpenApi\Attributes\RequestBody;
use OpenApi\Attributes\Response;
use OpenApi\Attributes\Schema;

class AuthController extends Controller
{
    #[Post(
        path: '/api/auth/sign-up',
        description: 'Регистрация',
        requestBody: new RequestBody(
            required: true,
            content: new MediaType(
                'application/json',
                new Schema(
                    required: [
                        'name',
                        'password',
                        'email',
                    ],
                    properties: [
                        new Property(property: 'name', description: 'ФИО', type: 'string', example: 'Ivanov Ivan Ivanovich'),
                        new Property(property: 'password', description: 'Пароль', type: 'string', example: 'password'),
                        new Property(property: 'email', description: 'Почта', type: 'string', example: 'example@example.com'),
                    ],
                    type: 'object'
                )
            )
        ),
        tags: ['Auth'],
        responses: [
            new Response(response: 200, description: 'ок', content: new JsonContent()),
        ]
    )]
    public function signUp(Request $request, AuthCommandSignUp $command)
    {
        return $command->handle($request->input());
    }
}
