<?php
namespace App\Services;

use App\Enums\Jurusan;

class Color {
    public function jurusan(string $parameter){
        return match ($parameter) {
            Jurusan::REKAYASA_PERANGKAT_LUNAK->value => 'bg-rpl',
            Jurusan::PERHOTELAN->value => 'bg-perhotelan',
            Jurusan::SENI_MUSIK->value => 'bg-musik',
            Jurusan::TATA_BOGA->value => 'bg-boga',
            Jurusan::TATA_KECANTIKAN->value => 'bg-kecantikan',
            Jurusan::USAHA_PERJALANAN_WISATA->value => 'bg-wisata',
            Jurusan::TATA_BUSANA->value => 'bg-busana',
            default => 'abu'
        };
    }
    public function text(string $parameter){
        return match ($parameter) {
            Jurusan::REKAYASA_PERANGKAT_LUNAK->value => 'text-rpl',
            Jurusan::PERHOTELAN->value => 'text-perhotelan',
            Jurusan::SENI_MUSIK->value => 'text-musik',
            Jurusan::TATA_BOGA->value => 'text-boga',
            Jurusan::TATA_KECANTIKAN->value => 'text-kecantikan',
            Jurusan::USAHA_PERJALANAN_WISATA->value => 'text-wisata',
            Jurusan::TATA_BUSANA->value => 'busana',
            default => 'abu'
        };
    }
}
