<?php

namespace App\Observers;

use App\Models\Soal;
use App\Models\Jurusan;
use Illuminate\Support\Facades\Log;

class JurusanObserver
{
    /**
     * Handle the Jurusan "created" event.
     */
    public function created(Jurusan $jurusan): void
    {
        Soal::create([
            "nama_soal" => "Test Peminatan {$jurusan->nama_jurusan}",
            "jurusan_id" => $jurusan->id, 
            "jumlah_soal" => 10, 
            "minimal_benar" => 8, 
            "total_nilai" => 100, 
            "passing_grade" => 75
        
        ]); 
    }

    /**
     * Handle the Jurusan "updated" event.
     */
    public function updated(Jurusan $jurusan): void
    {
        //
    }

    /**
     * Handle the Jurusan "deleted" event.
     */
    public function deleted(Jurusan $jurusan): void
    {
        //
    }

    /**
     * Handle the Jurusan "restored" event.
     */
    public function restored(Jurusan $jurusan): void
    {
        //
    }

    /**
     * Handle the Jurusan "force deleted" event.
     */
    public function forceDeleted(Jurusan $jurusan): void
    {
        //
    }
}
