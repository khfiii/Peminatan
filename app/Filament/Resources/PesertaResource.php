<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PesertaResource\Pages;
use App\Filament\Resources\PesertaResource\RelationManagers;
use App\Models\Jawaban;
use App\Models\Peserta;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Filament\Tables\Grouping\Group;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PesertaResource extends Resource
{
    protected static ?string $model = Jawaban::class;

    protected static ?string $navigationIcon = 'heroicon-o-user-group';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('peserta.nama_peserta')
                ->searchable(),
                TextColumn::make('soal.jurusan.nama_jurusan')
                ->badge()
                ->sortable()
                ->searchable(),
                TextColumn::make('peserta.email')
                ->label('Email')
                ->searchable()
                ->badge(),
                TextColumn::make('peserta.sekolah_asal')
                ->label('Sekolah Asal')
                ->searchable(),
                TextColumn::make('nilai_peserta')
                ->searchable()
                ->badge(),
            ])
            ->groups([
                Group::make('soal.jurusan.nama_jurusan')
                ->label('Jurusan'),
                Group::make('peserta.sekolah_asal')
                ->label('Sekolah Asal'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ])
            ->emptyStateHeading('Tidak ada list peserta saat ini');
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
            'index' => Pages\ListPesertas::route('/'),
        ];
    }

    public static function getEloquentQuery(): Builder
{
    return parent::getEloquentQuery()->with(['peserta', 'soal']);
}
}
