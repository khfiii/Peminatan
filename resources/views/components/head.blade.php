<div class="sm:mx-20 sm:py-4" x-data="{ open: false }" x-init="open">
    <div x-show="open" class="fixed h-screen bg-abu w-full right-0 top-0 bottom-0 debug"
        x-transition:enter="transition ease-out duration-300" x-transition:enter-start="-translate-x-full"
        x-transition:enter-end="opacity-100 translate-x-0" x-transition:leave="transition ease-in duration-300"
        x-transition:leave-start="opacity-100" x-transition:leave-end="-translate-x-full">

        <div class="basis-full bg-abu border-l border-opacity-5 relative border-white">
            <div class="grid grid-cols-3 p-4">
                <div class="col-span-2">
                    <div class="flex flex-col gap-y-4" x-data="{ active: 1 }">
                        <a href="#"
                            class="hover:text-kuning hover:underline hover:underline-offset-[7px] focus:underline-offset-[7px]"
                            @click="active=1; open=false;"
                            :class="active === 1 ? 'text-kuning underline underline-offset-[7px]' : ''">Beranda</a>
                        <a href="#peminatan" class="hover:text-kuning hover:underline hover:underline-offset-[7px]"
                            @click="active=2; open=false"
                            :class="active === 2 ? 'text-kuning underline underline-offset-[7px]' : ''">Peminatan</a>
                        <a href="https://smkn4bjm.sch.id/" @click="active=3; open=false"
                            class="hover:text-kuning hover:underline hover:underline-offset-[7px]"
                            :class="active === 3 ? 'text-kuning underline underline-offset-[7px]' : ''">Website</a>
                    </div>
                </div>
                <div class="col-span-1 ms-auto">
                    <button x-on:click="open=false">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6 font-bold">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>

    </div>
    <div class="grid grid-cols-4 p-4 sm:hidden">
        <div class="col-span-full">
            <button @click="open=true">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M3.75 6.75h16.5M3.75 12H12m-8.25 5.25h16.5" />
                </svg>
            </button>
        </div>
    </div>
    <div class="invisible sm:visible flex justify-between">
        <div class="inline-flex items-center gap-1">
            <img src="{{ Vite::asset('resources/images/logo.png') }}" class="w-12" alt="">
            <div class="w-20">
                <h4 class="uppercase text-coklat font-bold text-wrap leading-[15px]">smkn 4 banjarmasin</h4>
            </div>
        </div>

        <div class="inline-flex items-center gap-10" x-data="{ active: 1 }" x-init="active">
            <a href="#"
                class="hover:text-kuning hover:underline hover:underline-offset-[7px] focus:underline-offset-[7px]"
                @click="active=1" :class="active == 1 ? 'text-kuning underline underline-offset-[7px]' : ''">Beranda</a>
            <a href="#peminatan" class="hover:text-kuning hover:underline hover:underline-offset-[7px]"
                @click="active=2"
                :class="active == 2 ? 'text-kuning underline underline-offset-[7px]' : ''">Peminatan</a>
            <a href="https://smkn4bjm.sch.id/" @click="active=3"
                class="hover:text-kuning hover:underline hover:underline-offset-[7px]"
                :class="active == 3 ? 'text-kuning underline underline-offset-[7px]' : ''">Website</a>
        </div>
    </div>
</div>
