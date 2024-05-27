<?php

namespace App\Http\Middleware;

use App\Models\Jawaban;
use App\Models\Peserta;
use App\Models\Soal;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class UnregisterPeserta
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $peserta = Peserta::findOrFail($request->route()->parameter('peserta')->getKey());

        $soal = Soal::findOrFail($request->route()->parameter('soal')->getKey());

        $jawaban = Jawaban::where('peserta_id', $peserta->id)->first();

        if ($jawaban) {
            if ($jawaban->soal_id === $soal->id) {
                return redirect()->route('result', ['jawaban' => $jawaban]);
            }
        }

        return $next($request);
    }
}
