<?php
namespace App\Services;

use App\Models\Peserta;
use Illuminate\Support\Facades\Vite;
use App\Enums\Jurusan as JurusanEnum;


class Jurusan
{
    public function generateCode(?string $string) : string
    {

        $words = explode(' ', $string);

        $word = '';

        foreach($words as $result){
                $word .= substr($result, 0, 1);
        }

        return strtoupper($word).rand(0,10);
    }

    public function setLogo(string $parameter){
        return match ($parameter) {
            JurusanEnum::REKAYASA_PERANGKAT_LUNAK->value => $this->getAssetFromResources('resources/images/rpl.png'),
            JurusanEnum::PERHOTELAN->value => $this->getAssetFromResources('resources/images/perhotelan.png'),
            JurusanEnum::SENI_MUSIK->value => $this->getAssetFromResources('resources/images/musik.png'),
            JurusanEnum::TATA_BOGA->value => $this->getAssetFromResources('resources/images/kuliner.png'),
            JurusanEnum::TATA_KECANTIKAN->value => $this->getAssetFromResources('resources/images/kecantikan.png'),
            JurusanEnum::USAHA_PERJALANAN_WISATA->value => $this->getAssetFromResources('resources/images/upw.png'),
            JurusanEnum::TATA_BUSANA->value => $this->getAssetFromResources('resources/images/busana.png'),
            default => 'abu'
        };
    }

    public function getAssetFromResources(string $path){
        return Vite::asset($path);
    }

    public function checkCompletedTest(?Peserta $peserta, int $soal_id){
       if(is_null($peserta)){
            return false;
       }

       if(!$peserta->jawabans->where('soal_id', $soal_id)->count() > 0){
        return false;
    }

    return true;
    }



}
