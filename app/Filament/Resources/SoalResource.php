<?php

namespace App\Filament\Resources;

use Filament\Forms;
use App\Models\Soal;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Forms\Components;
use Filament\Resources\Resource;
use Filament\Tables\Actions\Action;
use Filament\Support\Enums\MaxWidth;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Actions\ActionGroup;
use Filament\Tables\Columns\ToggleColumn;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\SoalResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\SoalResource\RelationManagers;

class SoalResource extends Resource
{
    protected static ?string $model = Soal::class;

    protected static ?string $navigationIcon = 'heroicon-o-bookmark';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Components\Select::make('jurusan_id')
                ->required()
                ->relationship(name: 'jurusan', titleAttribute: 'nama_jurusan'),
                Components\TextInput::make('nama_soal')
                ->required(),
                Components\TextInput::make('jumlah_soal')
                ->required()
                ->numeric(),
                Components\TextInput::make('minimal_benar')
                ->required()
                ->numeric(),
                Components\TextInput::make('total_nilai')
                ->required()
                ->numeric(),
                Components\TextInput::make('passing_grade')
                ->required()
                ->numeric()
            ])
            ->columns('full');
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('nama_soal')
                ->label('Soal')
                ->sortable(),
                TextColumn::make('jurusan.nama_jurusan')
                ->label('Jurusan'),
                TextColumn::make('jumlah_soal')
                ->label('Jumlah')
                ->formatStateUsing(function(string $state) : string{
                    return "{$state} soal";
                }),
                ToggleColumn::make('is_visible')
                ->label('Status')
            ])
            ->filters([
                //
            ])
            ->actions([
                ActionGroup::make([
                    Tables\Actions\Action::make('soal')
                    ->requiresConfirmation()
                    ->icon('heroicon-o-question-mark-circle')
                    ->color('info')
                    ->label('Buat Pertanyaan')
                    ->url(fn( Soal $record ) => route('filament.admin.resources.soals.pertanyaan', ['record' => $record])),
                    Tables\Actions\EditAction::make()
                    ->modalWidth(MaxWidth::Large)
                    ->color('primary'),
                    Tables\Actions\DeleteAction::make()
                    ->modalWidth(MaxWidth::Large)
                    ->color('danger'),
                ])
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
            'index' => Pages\ListSoals::route('/'),
            'pertanyaan' => Pages\Pertanyaan::route('pertanyaan/{record}')
        ];
    }

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()->with('pertanyaans');
    }
}
