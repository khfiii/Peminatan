<div class="">

    <div class="max-w-md mx-auto bg-white p-6
				rounded-md shadow-md mt-4 flex flex-col items-center">
        <div class="mx-auto w-32">
            <img src="{{ Vite::asset('resources/images/logo.png') }}" alt="">
            <div class="font-bold uppercase text-coklat text-center mb-6 leading-[20px]">smkn 4 banjarmasin</div>
        </div>
        <div class="">
            <form wire:submit="simpanPeserta" class="space-y-4 w-[18rem]">
                <label class="form-control w-full max-w-sm">
                    <div class="label">
                        <span class="label-text text-coklat">Nama Lengkap</span>
                    </div>
                    <input type="text" wire:model="nama_peserta" placeholder="Masukan nama lengkap"
                        class="input input-bordered w-full max-w-xs" />
                    @error('nama_peserta')
                        <small class="text-red-600">{{ $message }}</small>
                    @enderror
                </label>
                <label class="form-control w-full max-w-sm">
                    <div class="label">
                        <span class="label-text text-coklat">NIS</span>
                    </div>
                    <input type="number" wire:model="nis" placeholder="Masukan NIS"
                        class="input input-bordered w-full max-w-xs" />
                    @error('nis')
                        <small class="text-red-600">{{ $message }}</small>
                    @enderror
                </label>
                <label class="form-control w-full max-w-sm">
                    <div class="label">
                        <span class="label-text text-coklat">NISN</span>
                    </div>
                    <input type="number" wire:model="nisn" placeholder="Masukan NIS"
                        class="input input-bordered w-full max-w-xs" />
                    @error('nisn')
                        <small class="text-red-600">{{ $message }}</small>
                    @enderror
                </label>
                <label class="form-control w-full max-w-xs">
                    <div class="label">
                        <span class="label-text text-coklat">Tanggal Lahir</span>
                    </div>
                    <input type="date" wire:model="tanggal_lahir" placeholder="Masukan nama lengkap"
                        class="input input-bordered w-full max-w-xs" />
                    @error('tanggal_lahir')
                        <small class="text-red-600">{{ $message }}</small>
                    @enderror
                </label>
                <label class="form-control w-full max-w-xs">
                    <div class="label">
                        <span class="label-text text-coklat">Nomor Telepon</span>
                    </div>
                    <input wire:model="nomor_telepon" type="number" placeholder="Masukan nomor telepon"
                        class="input input-bordered w-full max-w-xs" />
                    @error('nomor_telepon')
                        <small class="text-red-600">{{ $message }}</small>
                    @enderror
                </label>
                <label class="form-control w-full max-w-xs">
                    <div class="label">
                        <span class="label-text text-coklat">Email</span>
                    </div>
                    <input wire:model="email" type="email" placeholder="Masukan email"
                        class="input input-bordered w-full max-w-xs" />
                    @error('email')
                        <small class="text-red-600">{{ $message }}</small>
                    @enderror
                </label>
                <label class="form-control w-full max-w-xs">
                    <div class="label">
                        <span class="label-text text-coklat">Sekolah Asal</span>
                    </div>
                    <input wire:model="sekolah_asal" type="text" placeholder="Masukan sekolah"
                        class="input input-bordered w-full max-w-xs" />
                    @error('sekolah_asal')
                        <small class="text-red-600">{{ $message }}</small>
                    @enderror
                </label>
                <label class="form-control w-full max-w-xs">
                    <div class="label">
                        <span class="label-text text-coklat">Tanggal Lulus</span>
                    </div>
                    <input wire:model="tahun_lulus" type="date" placeholder="Masukan tahun lulus"
                        class="input input-bordered w-full max-w-xs" />
                    @error('tahun_lulus')
                        <small class="text-red-600">{{ $message }}</small>
                    @enderror
                </label>
                <button wire:loading.remove type="submit"
                    class="bg-[#867F03] text-white px-4 py-2
					rounded-md mt-8">
                    Selanjutnya
                </button>
                <div wire:loading>
                    <span class="loading loading-dots loading-lg"></span>
                </div>
            </form>
        </div>
    </div>
</div>
