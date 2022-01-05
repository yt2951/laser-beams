<?php

/**
 * This file is part of Simps.
 *
 * @link     https://simps.io
 * @document https://doc.simps.io
 * @license  https://github.com/simple-swoole/simps/blob/master/LICENSE
 */

declare(strict_types=1);

return [
    //Server::onStart
    'start' => [
    ],
    //Server::onWorkerStart
    'workerStart' => [
        [\App\Listeners\Pool::class, 'workerStart'],
    ],
];
