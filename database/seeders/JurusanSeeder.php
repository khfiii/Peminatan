<?php

namespace Database\Seeders;

use App\Models\Jurusan;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class JurusanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Jurusan::create([
            'kode_jurusan' => 'RPL', 
            'nama_jurusan' => 'Rekayasa Perangkat Lunak'
        ]); 
        Jurusan::create([
            'kode_jurusan' => 'TB', 
            'nama_jurusan' => 'Tata Boga'
        ]); 
        Jurusan::create([
            'kode_jurusan' => 'TBS', 
            'nama_jurusan' => 'Tata Busana'
        ]); 
        Jurusan::create([
            'kode_jurusan' => 'SM', 
            'nama_jurusan' => 'Seni Musik'
        ]); 
        Jurusan::create([
            'kode_jurusan' => 'UPW', 
            'nama_jurusan' => 'Usaha Perjalanan Wisata'
        ]); 
        Jurusan::create([
            'kode_jurusan' => 'TK', 
            'nama_jurusan' => 'Tata Kecantikan'
        ]); 
        Jurusan::create([
            'kode_jurusan' => 'P', 
            'nama_jurusan' => 'Perhotelan'
        ]); 
    }
}
