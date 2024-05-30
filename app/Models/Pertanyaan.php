<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Pertanyaan extends Model
{
    use HasFactory;

    protected $fillable = ['soal_id', 'teks_pertanyaan', 'jawaban'];

    public function soal(): BelongsTo
    {
        return $this->belongsTo(Soal::class);
    }


}
