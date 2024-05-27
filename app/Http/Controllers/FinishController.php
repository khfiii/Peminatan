<?php

namespace App\Http\Controllers;

use App\Models\Jawaban;
use Illuminate\Http\Request;

class FinishController extends Controller
{
    Public function result(Jawaban $jawaban){

        return view('congrats', [
            'jawaban' => $jawaban
        ]);
    }
}
