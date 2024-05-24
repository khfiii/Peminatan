<?php

namespace Database\Seeders;

use App\Models\Jurusan;
use Illuminate\Database\Seeder;
use App\Enums\Jurusan as EnumJurusan;
use App\Facades\Jurusan as FacadeJurusan;
class JurusanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        foreach(EnumJurusan::cases() as $jurusan) {
            Jurusan::create([
                'nama_jurusan' => $jurusan->value, 
                'kode_jurusan' => FacadeJurusan::generateCode($jurusan->value)
            ]); 
        }
    }
}
