<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class Redirect
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $path = urldecode($request->uri()->path());
        $redirect = \App\Models\Redirect::query()->where('from', $path)->first();

        if ($redirect) {
            return redirect($redirect->to, $redirect->status_code);
        }

        return $next($request);
    }
}
