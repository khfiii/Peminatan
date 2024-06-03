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
        $parameterSoal = $request->route()->parameter('soal');
        $authPeserta = auth('peserta')->user();

        $checkIfPesertaHasJawaban = Jawaban::where('soal_id', $parameterSoal->id)->where('peserta_id', $authPeserta->id)->first();


        if($checkIfPesertaHasJawaban){
            return redirect()->route('result', ['jawaban' => $checkIfPesertaHasJawaban]);
        }


        return $next($request);
    }
}
