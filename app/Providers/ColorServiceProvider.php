<?php

namespace App\Providers;

use App\Facades\Color as FacadesColor;
use App\Services\Color;
use Illuminate\Foundation\AliasLoader;
use Illuminate\Support\ServiceProvider;

class ColorServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind('Color', Color::class);

        $loader = AliasLoader::getInstance();
        $loader->alias('SetColor', FacadesColor::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
