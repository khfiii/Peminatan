<?php

namespace App\Livewire;

use App\Models\Jawaban;
use Livewire\Component;

class Result extends Component
{
    public Jawaban $jawaban;
    public function render()
    {
        return view('livewire.result', [
            'jawaban' => $this->jawaban
        ]);
    }
}
