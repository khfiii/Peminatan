<?php

namespace App\Livewire;

use App\Models\Soal;
use App\Models\Peserta;
use Livewire\Component;
use Livewire\Attributes\Validate;
use Illuminate\Support\Facades\Auth;

class Biodata extends Component
{
    public Soal $soal;

    #[Validate('required', message:'Nama lengkap wajib diisi')]
    public $nama_peserta;

    #[Validate('required', message:'Tanggal lahir wajib diisi')]

    public $tanggal_lahir;

    #[Validate('required', message:'Nomor telepon wajib diisi')]
    #[Validate('min:10', message:'Masukan nomor telepon yang sesuai')]

    public $nomor_telepon;

    #[Validate('required', message:'Email wajib diisi')]
    #[Validate('email', message:'Format email tidak sesuai')]
    #[Validate('unique:pesertas', message:'Email sudah terdaftar')]
    #[Validate('ends_with:gmail.com', message:'Format email yang kamu masukan tidak sesuai')]


    public $email;

    #[Validate('required', message:'Asal sekolah wajib diisi')]

    public $sekolah_asal;


    #[Validate('required', message:'Tahun lulus wajib diisi')]

    public $tahun_lulus;

    #[Validate('required', message:'NISN wajib diisi')]
    public $nisn;
    #[Validate('required', message:'NIS wajib diisi')]
    public $nis;
    public function mount(Soal $soal)
    {
        $this->soal = $soal;
    }
    public function render()
    {
        return view('livewire.biodata');
    }

    public function simpanPeserta(){

        $validated = $this->validate();

        $peserta = Peserta::create($validated);

        Auth::guard('peserta')->login($peserta);

        return redirect()->route('soal', [
            'soal' => $this->soal,
            'peserta' => $peserta->getKey()
        ]);

;    }
}
