<?php

use App\Livewire\Main;
use App\Livewire\Soal;
use App\Livewire\Result;
use App\Livewire\Biodata;
use App\Http\Middleware\FinishTest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FinishController;
use App\Http\Middleware\UnregisterPeserta;
use App\Http\Middleware\CheckRegisterPeserta;


Route::get("/", Main::class)->name('home');
Route::get("pertanyaan/{soal}/biodata", Biodata::class)->name('biodata')
->middleware(CheckRegisterPeserta::class);
Route::get("pertanyaan/{soal}/{peserta}", Soal::class)->name('soal')
->middleware(UnregisterPeserta::class);

Route::middleware(FinishTest::class)->group(function(){
   Route::get('soal/result/{jawaban}', Result::class )->name('result');
});


