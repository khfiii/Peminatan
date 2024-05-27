<?php

namespace App\Livewire;

use App\Models\Soal;
use Livewire\Component;

class Main extends Component
{

    public $nama = 'kahfi';
    public function render()
    {
        return view('livewire.main', [
            'soals' => Soal::where('is_visible', true)
            ->has('pertanyaans')
            ->with(['jurusan', 'pertanyaans'])->get(  )
        ]);
    }
}
