<?php

namespace App\Filament\Resources\SoalResource\Pages;

use Filament\Forms\Form;
use Livewire\Attributes\On;
use Filament\Resources\Pages\Page;
use Illuminate\Support\HtmlString;
use Filament\Forms\Components\Radio;
use Filament\Forms\Components\Hidden;
use Filament\Support\Exceptions\Halt;
use Filament\Forms\Components\Section;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Components\Textarea;
use App\Filament\Resources\SoalResource;
use Filament\Forms\Components\TextInput;
use Filament\Notifications\Notification;
use App\Models\Pertanyaan as ModelPertanyaan;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Resources\Pages\Concerns\InteractsWithRecord;

class Pertanyaan extends Page implements HasForms
{
    use InteractsWithRecord, InteractsWithForms;
    protected static string $resource = SoalResource::class;

    public ?array $data = [];

    public int $jumlah_soal; 
    
    protected static string $view = 'filament.resources.soal-resource.pages.pertanyaan';

    public function mount(int | string $record): void
    {
        $this->record = $this->resolveRecord($record);
        $this->jumlah_soal = $this->record->jumlah_soal; 
        $this->form->fill();
    }

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('')
                ->description(new HtmlString("<strong> Buat Pertanyaan </strong> <br> Pertanyaan untuk {$this->record->nama_soal}"))
                ->schema([
                    Hidden::make('soal_id')
                    ->default($this->record->id), 
                    Textarea::make('teks_pertanyaan')
                    ->required()
                    ->label('Teks Pertanyaan'),
                    Radio::make('jawaban')
                        ->label('Jawaban')
                        ->required()
                        ->boolean()
                        ->inline()
                        ->inlineLabel(false)
                        ->helperText('Jawaban memiliki poin tergantung dengan pilihan yang dipilih')
                ])
            ])
            ->statePath('data');
    }

    public function create(): void
    {

        if($this->checkMaximumSoal()){
            Notification::make()
            ->title('Soal melebihi batas jumlah maksimal')
            ->danger()
            ->send();
           return; 
        }

       $data = $this->form->getState(); 
       ModelPertanyaan::create($data);
       $this->resetForm(); 
       $this->sendSuccesNotification(); 
       $this->dispatch('pertanyaan-dibuat'); 
    }


    public function sendSuccesNotification(){
        Notification::make()
        ->title('Soal berhasil dibuat')
        ->success()
        ->send();
    }

    public function resetForm(){
        $this->form->fill(); 
    }

    public function checkMaximumSoal(): bool
    {
        return $this->listSoal()->count() >= $this->jumlah_soal; 
    }

    #[On('pertanyaan-dibuat')] 
    public function listSoal(){
        return ModelPertanyaan::where('soal_id', $this->record->getKey())->get(); 
    }    
}
