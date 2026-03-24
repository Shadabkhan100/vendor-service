<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AdminMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        // Example: only allow if user type is admin
        if (auth()->check() && auth()->user()->userType === 'admin') {
            return $next($request);
        }

        abort(403, 'Unauthorized'); // block others
    }
}