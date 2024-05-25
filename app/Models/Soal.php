<?php

namespace App\Models;

use App\Traits\UUID;
use App\Models\Jurusan;
use App\Models\Pertanyaan;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Soal extends Model
{
    use HasFactory;

    protected $fillable = ['jurusan_id', 'nama_soal', 'jumlah_soal', 'minimal_benar', 'total_nilai', 'passing_grade'];

    public function jurusan():BelongsTo
    {
        return $this->belongsTo(Jurusan::class, 'jurusan_id'); 
    }

    public function pertanyaans(): HasMany
    {
        return $this->hasMany(Pertanyaan::class);  
    }



}
