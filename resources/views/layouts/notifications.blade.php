<div class="bg-white rounded-lg shadow-lg col-span-1 h-[300px] p-3 hidden md:flex flex-col gap-y-4">
    <div class="w-full max-w-[100%] flex justify-between items-center">
        <h1 class="text-2xl font-bold">notifications </h1>
        <i class="fa-solid fa-bell fa-lg fa-shake icon-black -mb-1"></i>
    </div>
    <div class="flex flex-col items-center gap-y-2 text-white text-sm">
        @if (session()->has('tambah_data'))
        <div class="w-full mx-auto grid grid-cols-4 place-items-center rounded-lg bg-green-500 p-2">
            <span class="font-light col-span-3">{{ session('tambah_data') }}</span>
            <i class="fa-solid fa-check fa-md icon-white col-span-1 place-items-end"></i>
        </div>
        @endif
        <div class="w-full mx-auto grid grid-cols-4 place-items-center rounded-lg bg-green-500 p-2">
            <span class="font-light col-span-3">Halo {{ auth()->user()->name }}, selamat datang kembali:)</span>
            <i class="fa-solid fa-check fa-md icon-white col-span-1 place-items-end"></i>
        </div>

    </div>
</div>