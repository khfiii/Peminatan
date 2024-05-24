<?php
namespace App\Services;


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
}