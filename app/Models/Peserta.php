<?php

namespace App\Models;

use App\Models\Jawaban;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Peserta extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama', 
        'tanggal_lahir', 
        'phone', 
        'email', 
        'sekolah_asal', 
        'tahun_lulus'
    ]; 

    public function jawaban(): HasOne
    {
        return $this->hasOne(Jawaban::class); 
    }

    public function nilai(): BelongsToMany
    {
        return $this->belongsToMany(Soal::class); 
    }


}
