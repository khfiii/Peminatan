<x-filament-panels::page>

  <div class="grid grid-cols-6 gap-4">
    <div class="col-span-3">
      <form wire:submit="create">
        {{ $this->form }}

        <x-filament::button size="sm" type="submit" class="mt-3">
          Buat Soal
        </x-filament::button>
      </form>

    </div>
    <div class="col-span-3">
      <div class="space-y-2 text-[#9b9693]">
        @forelse ($this->listSoal() as $soal)
        <div class="grid grid-cols-3 items-center border border-gray-400 rounded-md text-sm">
          <div class="col-span-2 p-2">{{ $loop->iteration.'. '.Str::words($soal->teks_pertanyaan, 5, '...') }}</div>
        </div>
        @empty
        <div class="text-center">
          <p class="text-base font-semibold text-purple-700">Belum ada soal</p>
          <p class="mt-6 text-base leading-7 text-gray-600">Yah, soal peminatan ini belum punya soal yuk isi.</p>
          <div class="mt-10 flex items-center justify-center gap-x-6">
            <a href="#" class="text-sm font-semibold bg-purple-700 p-2 rounded-md text-gray-900">Butuh Bantuan <span aria-hidden="true">&rarr;</span></a>
          </div>
        </div>
        @endforelse
      </div>
    </div>
  </div>

</x-filament-panels::page>