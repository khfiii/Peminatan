<div class="">

    <div class="max-w-md mx-auto bg-white p-8
				rounded-md shadow-md mt-4">
        <h1 class="text-xl font-bold mb-6
				text-kuning text-center">
            Hallo 🎃 <br>
            Selamat Datang
        </h1>
        <form wire:submit="simpanPeserta" class="space-y-4">
            <label class="form-control w-full max-w-xs">
                <div class="label">
                    <span class="label-text text-coklat">Nama Lengkap</span>
                </div>
                <input type="text" wire:model="nama_peserta" placeholder="Masukan nama lengkap"
                    class="input input-bordered w-full max-w-xs" />
                @error('nama_peserta')
                    <span class="text-red-600">{{ $message }}</span>
                @enderror
            </label>
            <label class="form-control w-full max-w-xs">
                <div class="label">
                    <span class="label-text text-coklat">Tanggal Lahir</span>
                </div>
                <input type="date" wire:model="tanggal_lahir" placeholder="Masukan nama lengkap"
                    class="input input-bordered w-full max-w-xs" />
                @error('tanggal_lahir')
                    <span class="text-red-600">{{ $message }}</span>
                @enderror
            </label>
            <label class="form-control w-full max-w-xs">
                <div class="label">
                    <span class="label-text text-coklat">Nomor Telepon</span>
                </div>
                <input wire:model="nomor_telepon" type="number" placeholder="Masukan nomor telepon"
                    class="input input-bordered w-full max-w-xs" />
                @error('nomor_telepon')
                    <span class="text-red-600">{{ $message }}</span>
                @enderror
            </label>
            <label class="form-control w-full max-w-xs">
                <div class="label">
                    <span class="label-text text-coklat">Email</span>
                </div>
                <input wire:model="email" type="email" placeholder="Masukan email"
                    class="input input-bordered w-full max-w-xs" />
                @error('email')
                    <span class="text-red-600">{{ $message }}</span>
                @enderror
            </label>
            <label class="form-control w-full max-w-xs">
                <div class="label">
                    <span class="label-text text-coklat">Sekolah Asal</span>
                </div>
                <input wire:model="sekolah_asal" type="text" placeholder="Masukan sekolah"
                    class="input input-bordered w-full max-w-xs" />
                @error('sekolah_asal')
                    <span class="text-red-600">{{ $message }}</span>
                @enderror
            </label>
            <label class="form-control w-full max-w-xs">
                <div class="label">
                    <span class="label-text text-coklat">Tanggal Lulus</span>
                </div>
                <input wire:model="tahun_lulus" type="date" placeholder="Masukan tahun lulus"
                    class="input input-bordered w-full max-w-xs" />
                @error('tahun_lulus')
                    <span class="text-red-600">{{ $message }}</span>
                @enderror
            </label>
            <button type="submit" class="bg-kuning text-white px-4 py-2
					rounded-md mt-8">
                Selanjutnya
            </button>
        </form>

        {{-- <div id="result" class="mt-8 hidden">
            <h2 class="text-2xl font-bold mb-4 text-center">
                ???? Quiz Result
            </h2>
            <p id="score" class="text-lg font-semibold mb-2 text-center">
            </p>
            <p id="feedback" class="text-gray-700 text-center"></p>
        </div> --}}
    </div>
</div>
