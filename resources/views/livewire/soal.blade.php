<div>
    <div class="max-w-md mx-auto bg-white p-8
                    rounded-md shadow-lg mt-4">
        <h1
            class="font-bold mb-6
                    p-2 text-white {{ SetColor::jurusan($soal->jurusan->nama_jurusan) }} text-center text-xl">
            {{ $soal->jurusan->nama_jurusan }}

        </h1>
        <h3 class="text-2xl font-bold mb-6 text-center">

        </h3>
        <form wire:submit.prevent="submitJawaban" class="space-y-4">
            @foreach ($soal->pertanyaans as $pertanyaan)
                <div class="flex flex-col mb-4" wire:key="{{ $pertanyaan->id }}">
                    <label class="text-lg text-gray-800 mb-2">
                        {{ "{$loop->iteration}. $pertanyaan->teks_pertanyaan" }}
                    </label>
                    <div class="flex items-center space-x-4">
                        <input type="radio" id="jawabans-{{ $pertanyaan->id }}-true"
                            wire:model="jawabans.{{ $pertanyaan->id }}" name="jawabans-{{ $pertanyaan->id }}"
                            value="1" class="mr-2" required>
                        <label for="jawabans-{{ $pertanyaan->id }}-true" class="text-gray-700">
                            Ya
                        </label>
                    </div>
                    <div class="flex items-center space-x-4">
                        <input type="radio" id="jawabans-{{ $pertanyaan->id }}-false"
                            wire:model="jawabans.{{ $pertanyaan->id }}" name="jawabans-{{ $pertanyaan->id }}"
                            value="0" class="mr-2" required>
                        <label class="text-gray-700">
                            Tidak
                        </label>
                    </div>
                </div>
            @endforeach

            @error('jawabans')
                <div>
                    <label class="text-red-600">{{ $message }}</label>
                </div>
            @enderror

            <button type="submit"
                class="{{ SetColor::jurusan($soal->jurusan->nama_jurusan) }} text-white px-4 py-2 rounded-md mt-8">
                Selesai
            </button>
        </form>

        <div id="result" class="mt-8 hidden">
            <h2 class="text-2xl font-bold mb-4 text-center">
                ???? Quiz Result
            </h2>
            <p id="score" class="text-lg font-semibold mb-2 text-center">
            </p>
            <p id="feedback" class="text-gray-700 text-center"></p>
        </div>
    </div>
</div>
