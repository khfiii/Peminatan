<?php

namespace App\Models;

use App\Models\Jawaban;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Peserta extends Authenticatable
{
    use HasFactory;

    protected $fillable = [
        'nama_peserta',
        'tanggal_lahir',
        'nis',
        'nomor_telepon',
        'email',
        'completed_test',
        'sekolah_asal',
        'tahun_lulus'
    ];

    protected function casts(): array
    {
        return [
            'completed_test' => 'array',
        ];
    }
    public function jawabans(): HasMany
    {
        return $this->hasMany(Jawaban::class);
    }



}
