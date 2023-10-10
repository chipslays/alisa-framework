<?php

namespace App\Middlewares;

use Alisa\Http\Request;
use Alisa\Routing\Middleware;

class ExampleMiddleware extends Middleware
{
    public function __invoke(\Closure $next, Request $request): mixed
    {
        $next();
    }
}