<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/css/app.css'])
</head>

<body>
    <div class="h-screen w-full">
        <div class="flex justify-center items-center h-full">
            <div class="max-w-sm flex flex-col items-center  border border-gray-200 rounded-lg shadow-lg">

                <img class="rounded-t-lg" src="{{ Vite::asset('resources/images/thank.svg') }}" alt=""
                    width="200px" />
                <div class="p-5">
                    <a href=""{{ route('home') }}>
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-coklat">
                            Terimakasih.
                    </a>
                    <p class="mb-3 font-normal text-coklat text-xs">
                        <small>Batas maksimal mengikuti test ini cuma dua kali ya.</small>
                    </p>

                    <div class="inline-flex items-center justify-center gap-2">

                        <a href="{{ route('home') }}" class="btn bg-gray-200 text-coklat">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="m2.25 12 8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                            </svg>
                            Kembali Ke beranda
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </div>
</body>

</html>
