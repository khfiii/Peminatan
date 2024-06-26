<x-filament-panels::page>

  <div class="grid grid-rows-2 sm:grid-cols-6 gap-4">
    <div class="col-span-3">
      <form wire:submit="create">
        {{ $this->form }}

        <button wire:loading.remove type="submit" class="text-sm font-semibold bg-purple-700 p-2 rounded-md text-gray-900 mt-3">Buat Soal</button>
        <span class="mt-2" wire:loading>Tunggu sebentar ya..</span>
      </form>

    </div>
    <div class="col-span-3">
      <div class="space-y-4 text-[#9b9693]">
        @if ($this->getListSoal()->isNotEmpty())
        @foreach ($this->getListSoal() as $soal)
        <div class="grid grid-cols-3 items-center rounded-md text-sm">
          <div class="col-span-2 p-2">{{ $loop->iteration.'. '.$soal->teks_pertanyaan }}</div>
          <div class="col-span-1 p-2 ms-auto">
            <button class="bg-red-600 text-white p-1 rounded-sm" wire:click="hapusPertanyaan({{ $soal }})">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
              </svg>

            </button>
          </div>
        </div>
        @endforeach
        @else
        <x-empty-state />
        @endif
      </div>
      <div>
      </div>
    </div>
  </div>

</x-filament-panels::page>