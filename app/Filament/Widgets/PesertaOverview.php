<?php

namespace App\Filament\Widgets;

use App\Models\Soal;
use App\Models\Jurusan;
use App\Models\Peserta;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;

class PesertaOverview extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Peserta', Peserta::count()),
            Stat::make('Jurusan', Jurusan::count()),
            Stat::make('Aktif Soal', Soal::where('is_visible', true)->whereHas('pertanyaans')->count()),
        ];
    }
}
