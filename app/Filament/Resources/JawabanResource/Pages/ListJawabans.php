<?php

namespace App\Filament\Resources\JawabanResource\Pages;

use App\Filament\Resources\JawabanResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListJawabans extends ListRecords
{
    protected static string $resource = JawabanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
