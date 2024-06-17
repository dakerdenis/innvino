<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class CheckAdmin
{
    public function handle(Request $request, Closure $next)
    {
        Log::info('CheckAdmin is called');
        if (!Auth::check()) {
            return redirect('/login');
        }

        return $next($request);
    }
}
