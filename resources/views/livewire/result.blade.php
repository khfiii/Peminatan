<div class="h-screen w-full">

    @if ($jawaban->nilai_peserta >= $jawaban->soal->passing_grade)
        <div class="flex h-full justify-center items-center p-6">
            <div class="max-w-sm flex flex-col items-center  border border-gray-200 rounded-lg shadow-lg">

                <img class="rounded-t-lg" src="{{ Vite::asset('resources/images/success.svg') }}" alt=""
                    width="200px" />
                <div class="p-5">
                    <a href=""{{ route('home') }}>
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-coklat">
                            {{ $jawaban->peserta->nama_peserta }}</h5>
                    </a>
                    <p class="mb-3 font-normal text-coklat">Kamu memiliki potensi yang kuat untuk berada di jurusan
                        {{ $jawaban->soal->jurusan->nama_jurusan }}</p>

                    <div class="inline-flex items-center justify-center gap-2">

                        <a href="{{ route('home') }}" class="btn bg-gray-200 text-coklat">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="m2.25 12 8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                            </svg>


                            Beranda
                        </a>

                        <button class="btn bg-green-400 text-coklat" wire:click="downloadPdf">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M9 8.25H7.5a2.25 2.25 0 0 0-2.25 2.25v9a2.25 2.25 0 0 0 2.25 2.25h9a2.25 2.25 0 0 0 2.25-2.25v-9a2.25 2.25 0 0 0-2.25-2.25H15M9 12l3 3m0 0 3-3m-3 3V2.25" />
                            </svg>

                            Download Hasil
                        </button>

                    </div>

                </div>
            </div>

        </div>
    @else
        <div class="flex h-full justify-center items-center p-6">
            <div class="max-w-sm flex flex-col items-center  border border-gray-200 rounded-lg shadow-lg">

                <img class="rounded-t-lg" src="{{ Vite::asset('resources/images/thank.svg') }}" alt=""
                    width="200px" />
                <div class="p-5">
                    <a href="#">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-coklat ">
                            {{ $jawaban->peserta->nama_peserta }}</h5>
                    </a>
                    <p class="mb-3 font-normal text-gray-700">Kamu sepertinya tidak cocok untuk berada di jurusan
                        {{ $jawaban->soal->jurusan->nama_jurusan }}</p>
                    <div class="inline-flex items-center justify-center gap-2">

                        <a href="{{ route('home') }}" class="btn bg-gray-200 text-coklat">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="m2.25 12 8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                            </svg>


                            Beranda
                        </a>

                        <button class="btn bg-kuning text-coklat" wire:click="downloadPdf">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M9 8.25H7.5a2.25 2.25 0 0 0-2.25 2.25v9a2.25 2.25 0 0 0 2.25 2.25h9a2.25 2.25 0 0 0 2.25-2.25v-9a2.25 2.25 0 0 0-2.25-2.25H15M9 12l3 3m0 0 3-3m-3 3V2.25" />
                            </svg>

                            Download Hasil
                        </button>

                    </div>
                </div>
            </div>
        </div>
    @endif
</div>
