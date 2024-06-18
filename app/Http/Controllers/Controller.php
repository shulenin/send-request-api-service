<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

/**
 * @OA\Swagger(
 *      schemes={"http"},
 *      basePath="/api/v1",
 *      @OA\Info(
 *          title="Send Request API Service",
 *          version="1.0.0",
 *          @OA\Contact(
 *              email="dima.shulenin@mail.ru"
 *          ),
 *      ),
 *      @OA\PathItem(path="/api")
 * )
 */
class Controller extends BaseController
{
    use AuthorizesRequests;
    use ValidatesRequests;
}
