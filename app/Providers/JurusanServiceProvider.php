<?php

namespace App\Providers;

use App\Services\Jurusan;
use Illuminate\Support\ServiceProvider;

class JurusanServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind('Jurusan', Jurusan::class); 
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
