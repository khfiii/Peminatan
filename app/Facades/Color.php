<?php
namespace App\Facades;

use Illuminate\Support\Facades\Facade;

class Color extends Facade {
    protected static function getFacadeAccessor()
    {
        return 'Color';
    }
}
