<?php
namespace App\Services;

use Exception;
use App\Models\Jawaban;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Database\Eloquent\Model;

class Cetak{

    protected Jawaban $jawaban;

    public function __construct(Jawaban $jawaban) {
        $this->jawaban = $jawaban;
    }
    public function createFileName(?string $name = null): string{

        if(!is_null($name)){
            return $name. '.pdf';
        }

        return 'Laporan ' . $this->jawaban->soal?->nama_soal . '.pdf' ?? 'Example.pdf';
    }

    public function downloadPdf(string $filename){
        try {
            $passed = $this->checkPesertaLolos();
            $cekLulus = $passed ? 'SESUAI' : 'BELUM SESUAI';
            $nisn = $this->jawaban->peserta->nisn;
            $namaPeserta = $this->jawaban->peserta?->nama_peserta;
            $namaJurusan = $this->jawaban->soal?->jurusan?->nama_jurusan;
            $nilaiPeserta = $this->jawaban->nilai_peserta;
            $namaSoal = $this->jawaban->soal?->nama_soal;
            $textLanjutan = $this->textLanjutan();


            $pdf = Pdf::loadView('cetak-pdf', [
                'nisn' => $nisn,
                'cekLulus' => $cekLulus,
                'namaPeserta' => $namaPeserta,
                'namaJurusan' => $namaJurusan,
                'passed' => $passed,
                'nilaiPeserta' => $nilaiPeserta,
                'namaSoal' => $namaSoal,
                'textLanjutan' => $textLanjutan
            ]);

            return $pdf->setPaper('A4')->download($filename);
        } catch (\Throwable $e) {
            logger()->error('Error generating PDF: ' . $e->getMessage());
            return response()->json(['error' => 'Failed to generate PDF. Please try again later.'], 500);
        }
    }


    public function checkPesertaLolos(){
        if (is_null($this->jawaban->soal)) {
            throw new Exception('Relationship not found');
        }

        if (!$this->jawaban->nilai_peserta >= $this->jawaban->soal->passing_grade) {
            return false;
        }

        return true;
    }

    public function textLanjutan() : string
    {
       return  $this->jawaban->nilai_peserta >= $this->jawaban->soal->passing_grade
            ? 'Peserta diharapkan untuk mencetak laporan ini dan <b> WAJIB MEMBAWA KETIKA PROSES WAWANCARA DI SEKOLAH.</b>'
            : 'Peserta silahkan mencoba test peminatan Konsentrasi Keahlian Lain <small><a href="' .
            route('home').
            '"> Klik link disini</a> </small>';
    }

}
