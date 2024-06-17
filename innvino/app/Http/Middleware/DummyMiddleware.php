<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Log;

class DummyMiddleware
{
    public function handle($request, Closure $next)
    {
        Log::info('DummyMiddleware is called');
        return $next($request);
    }
}
