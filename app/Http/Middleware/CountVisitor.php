<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CountVisitor
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next)
    {
        $ip = $request->ip();
        if (!session()->has('visited')) {
            session()->put('visited', true);
            // increment visitor count in database or file
            // for example, you can use a simple counter in a file
            file_put_contents(storage_path('visitors.txt'), file_get_contents(storage_path('visitors.txt')) + 1);
        }
        return $next($request);
    }
}
