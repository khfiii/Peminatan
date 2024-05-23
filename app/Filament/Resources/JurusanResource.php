<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Jurusan;
use Filament\Forms\Set;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Forms\Components;
use Filament\Resources\Resource;
use Filament\Tables\Columns\TextColumn;
use App\Facades\Jurusan as JurusanFacade;
use App\Filament\Resources\JurusanResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\JurusanResource\RelationManagers;

class JurusanResource extends Resource
{
    protected static ?string $model = Jurusan::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Components\TextInput::make('nama_jurusan')
                ->live(onBlur:true)
                ->afterStateUpdated(function(Set $set, ?string $state){
                    $kode_jurusan = JurusanFacade::generateCode($state); 
                    $set('kode_jurusan', $kode_jurusan); 
                }),     
                Components\TextInput::make('kode_jurusan')
                ->readOnly(), 
            ])
            ->columns('full');
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('kode_jurusan')
                ->searchable(), 
                TextColumn::make('nama_jurusan')
                ->searchable()
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListJurusans::route('/'),
        ];
    }

}
