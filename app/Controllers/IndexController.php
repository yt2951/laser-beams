<?php

/**
 * This file is part of Simps.
 *
 * @link     https://simps.io
 * @document https://doc.simps.io
 * @license  https://github.com/simple-swoole/simps/blob/master/LICENSE
 */

declare(strict_types=1);

namespace App\Controllers;

use App\Helpers\ResponseHelper;
use Swoole\Http\Request;
use Swoole\Http\Response;

final class IndexController
{
    final public function index(Request $request, Response $response): void
    {
        $response->setStatusCode(ResponseHelper::HTTP_OK);
        $response->end(json_encode([
            'status' => 'Success',
            'message' => 'Created',
            'data' => 'Hello world!',
        ]));
    }
}