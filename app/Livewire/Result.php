<?php

namespace App\Livewire;

use App\Models\Jawaban;
use Livewire\Component;
use Barryvdh\DomPDF\Facade\Pdf;
use PhpParser\Node\Stmt\TryCatch;

class Result extends Component
{
    public Jawaban $jawaban;


    public function render()
    {
        return view('livewire.result', [
            'jawaban' => $this->jawaban
        ]);
    }

    public function downloadPdf(){

        $jawaban = $this->jawaban;

        return redirect()->route('download-pdf', ['jawaban' => $jawaban]);


    }

}
