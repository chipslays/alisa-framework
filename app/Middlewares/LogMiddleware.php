<?php

namespace App\Middlewares;

use Alisa\Http\Request;
use Alisa\Routing\Middleware;

class LogMiddleware extends Middleware
{
    public function __invoke(\Closure $next, Request $request): mixed
    {
        $next();

        $filename = date('Y-m-d') . '.log';

        $path = __DIR__ . '/../../storage/logs/' . $filename;

        $data = '[' . date('d.m.Y H:i:s') . '] -> ' . $request;

        file_put_contents($path, $data . "\n", FILE_APPEND);
    }
}