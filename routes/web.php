<?php

use App\Http\Controllers\CetakController;
use App\Livewire\Main;
use App\Livewire\Soal;
use App\Livewire\Result;
use App\Livewire\Biodata;
use App\Http\Middleware\FinishTest;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\UnregisterPeserta;
use App\Http\Middleware\CheckRegisterPeserta;
use App\Http\Middleware\MaximumAtempt;

Route::get("/", Main::class)->name('home');
Route::get("pertanyaan/{soal}/biodata", Biodata::class)->name('biodata')
->middleware(CheckRegisterPeserta::class);
Route::get("pertanyaan/{soal}/{peserta}", Soal::class)->name('soal')
->middleware([UnregisterPeserta::class, MaximumAtempt::class]);

Route::middleware(FinishTest::class)->group(function(){
   Route::get('soal/result/{jawaban}', Result::class )->name('result');
});

Route::get('download-pdf/{jawaban}', [CetakController::class, 'cetak'])->name('download-pdf');

Route::view('maximum-atempt', 'maximum')->name('maximum-atempt');


