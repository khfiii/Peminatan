<?php
namespace App\Facades;
use Illuminate\Support\Facades\Facade;

class Jurusan extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'Jurusan';
    }
}