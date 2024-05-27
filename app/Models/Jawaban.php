<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Jawaban extends Model
{
    use HasFactory;

    protected $fillable = [
        'peserta_id',
        'soal_id',
        'status_jawaban',
        'nilai_peserta'
    ];

    public function peserta(): BelongsTo
    {
        return $this->belongsTo(Peserta::class);
    }
    public function soal(): BelongsTo
    {
        return $this->belongsTo(Soal::class);
    }
}
