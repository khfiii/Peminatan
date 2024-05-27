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
                    <a href="{{ route('home') }}"
                        class="inline-flex items-center px-3 py-2
                        text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4
                        focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700
                        dark:focus:ring-blue-800">
                        Cek email kamu ya
                        <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M1 5h12m0 0L9 1m4 4L9 9" />
                        </svg>
                    </a>
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
                    <a href="https://mail.google.com"
                        class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        Cek email kamu ya
                        <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M1 5h12m0 0L9 1m4 4L9 9" />
                        </svg>
                    </a>
                </div>
            </div>

        </div>
    @endif



</div>
