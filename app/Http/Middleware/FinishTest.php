<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\Jawaban;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class FinishTest
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
       if(!$request->route()->hasParameter('jawaban')){
         throw new \Exception('Kamu belum memasukan memulai test');
       };

       return $next($request);
    }
}
