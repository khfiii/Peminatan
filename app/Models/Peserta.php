<?php

namespace App\Models;

use App\Models\Jawaban;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Peserta extends Authenticatable
{
    use HasFactory;

    protected $fillable = [
        'nama_peserta',
        'tanggal_lahir',
        'nomor_telepon',
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
