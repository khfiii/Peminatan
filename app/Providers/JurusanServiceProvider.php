<?php

namespace App\Providers;

use App\Services\Jurusan;
use App\Models\Jurusan as JurusanModel;
use App\Observers\JurusanObserver;
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
        if(app()->isLocal()){
            JurusanModel::observe(JurusanObserver::class); 
        } 
    }
}
