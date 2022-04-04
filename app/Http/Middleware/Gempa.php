<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Gempa
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if($request->input('token') !== 'secret') {
            return response()->json([
                'code' => 422,
                'status' => 'error',
            ], 422);
        }

        return $next($request);
    }
}
