<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class SetLocationMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Example logic: set default location as 'sa'
        // You can enhance this to detect by IP, subdomain, query param, etc.
        $locationShortCode = 'sa';

        // Store in session
        session(['location_short_code' => $locationShortCode]);

        return $next($request);
    }
}
