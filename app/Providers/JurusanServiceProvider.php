<?php

namespace App\Providers;

use App\Facades\Jurusan as FacadesJurusan;
use App\Services\Jurusan;
use App\Observers\JurusanObserver;
use Illuminate\Foundation\AliasLoader;
use App\Models\Jurusan as JurusanModel;
use Illuminate\Support\ServiceProvider;

class JurusanServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind('Jurusan', Jurusan::class);

        $loader = AliasLoader::getInstance();
        $loader->alias('JurusanFacade', FacadesJurusan::class);
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
