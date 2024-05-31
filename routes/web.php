<?php

use App\Livewire\Main;
use App\Livewire\Soal;
use App\Models\Jawaban;
use App\Livewire\Result;
use App\Livewire\Biodata;
use App\Http\Middleware\FinishTest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FinishController;
use App\Http\Middleware\UnregisterPeserta;
use Barryvdh\DomPDF\Facade\Pdf as FacadePdf;
use App\Http\Middleware\CheckRegisterPeserta;
use App\Models\User;

Route::get("/", Main::class)->name('home');
Route::get("pertanyaan/{soal}/biodata", Biodata::class)->name('biodata')
->middleware(CheckRegisterPeserta::class);
Route::get("pertanyaan/{soal}/{peserta}", Soal::class)->name('soal')
->middleware(UnregisterPeserta::class);

Route::middleware(FinishTest::class)->group(function(){
   Route::get('soal/result/{jawaban}', Result::class )->name('result');
});

Route::get('download-pdf/{jawaban}', function(Jawaban $jawaban){
    try {
        $filename = 'Laporan '.$jawaban->soal->nama_soal.'.pdf';
        $pdf = FacadePdf::loadView('cetak-pdf', ['jawaban'=> $jawaban]);
        return $pdf->download($filename);

       } catch (\Throwable $e) {
        logger()->error('Error generating PDF: ' . $e->getMessage());
        return response()->json(['error' => 'Failed to generate PDF. Please try again later.'], 500);
       }

})->name('download-pdf');


