<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RolleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, $rolle): Response
    {
         if (auth()->check()) {
            if (auth()->user()->rolle === $rolle) {
                return $next($request);
            }
        }

        abort(403, 'Unauthorized');
    }
}
