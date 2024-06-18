<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use OpenApi\Attributes\Info;
use OpenApi\Attributes\SecurityScheme;
use OpenApi\Attributes\Server;

#[
    Info(
        version: '1.0.0',
        title: 'Send Request API Service',
    ),
    SecurityScheme(
        securityScheme: 'bearerAuth',
        type: 'http',
        name: 'Authentication',
        in: 'header',
        bearerFormat: 'JWT',
        scheme: 'bearer',
    )
]
class Controller extends BaseController
{
    use AuthorizesRequests;
    use ValidatesRequests;
}
