<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class MaximumAtempt
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {

        if($this->MaximumAtempt()){
            return redirect()->route('maximum-atempt');
        }

        return $next($request);
    }

    public function MaximumAtempt(): bool
    {
        return auth('peserta')->user()->jawabans->count() >= 2;
    }

}
