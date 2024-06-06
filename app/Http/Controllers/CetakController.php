<?php

namespace App\Http\Controllers;


use App\Models\Jawaban;
use App\Services\Cetak as CetakServices;

class CetakController extends Controller
{
    public function cetak(Jawaban $jawaban)
    {

        try {
            $cetakServices = new CetakServices($jawaban);
            $filename = $cetakServices->createFileName();
            $downloadPdf = $cetakServices->downloadPdf($filename);

            return $downloadPdf;

        } catch (\Throwable $th) {
            logger($th);
        }
    }
}
