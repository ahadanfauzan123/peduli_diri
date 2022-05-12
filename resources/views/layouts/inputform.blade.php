<form action="/inputPerjalanan" method="POST" class="relative flex flex-col gap-y-4 w-full max-w-[80%] h-[370px]">
    @csrf
    <div class="flex justify-between items-center">
        <input type="hidden" name="user_id" value="{{ auth()->user()->id }}" class="px-4 w-[450px] h-[60px] text-2xl font-bold rounded-2xl border-2 border-gray-300 bg-gray-200">
    </div>
    <div class="flex justify-between items-center">
        <label for="tanggalinput" class="text-xl font-semibold flex flex-col gap-y-2">
            <h2>
                tanggal
            </h2> 
            <span class='text-red-400 font-light text-sm'>
                @error('tanggal')
                {{ $message }}
                @enderror
            </span>
        </label>
        <input type="date" name="tanggal" id="tanggalinput" class="px-4 w-[450px] h-[60px] text-2xl font-bold rounded-2xl border-2 border-gray-300 bg-gray-200">
    </div>
    <div class="flex justify-between items-center">
        <label for="jaminput" class="text-xl font-semibold flex flex-col gap-y-2">
            <h2>
                jam
            </h2> 
            <span class='text-red-400 font-light text-sm'>
                @error('jam')
                {{ $message }}
                @enderror
            </span>
        </label>
        <input type="time" name="jam" id="jaminput" class="px-4 w-[450px] h-[60px] text-2xl font-bold rounded-2xl border-2 border-gray-300 bg-gray-200">
    </div>
    <div class="flex justify-between items-center">
        <label for="lokasiinput" class="text-xl font-semibold flex flex-col gap-y-2">
            <h2>
                Lokasi yang dikunjungi: 
            </h2> 
            <span class='text-red-400 font-light text-sm'>
                @error('lokasi')
                {{ $message }}
                @enderror
            </span>
        </label>
        <input type="text" name="lokasi" id="lokasiinput" class="px-4 w-[450px] h-[60px] text-2xl font-bold rounded-2xl border-2 border-gray-300 bg-gray-200">
    </div>
    <div class="flex justify-between items-center">
        <label for="suhuinput" class="text-xl font-semibold flex flex-col gap-y-2">
            <h2>
                Suhu Tubuh: 
            </h2> 
            <span class='text-red-400 font-light text-sm'>
                @if(session()->has('suhu_error'))
                {{ session('suhu_error') }}
                @enderror
            </span>
        </label>
        <input type="tel" name="suhu" id="suhuinput" class="px-4 w-[450px] h-[60px] text-2xl font-bold rounded-2xl border-2 border-gray-300 bg-gray-200">
    </div>
    <button type="submit" class="absolute bottom-0 right-0 w-[120px] h-[50px] bg-blue-400 ring-1 ring-gray-100 rounded-full text-white font-semibold shadow-sm">simpan</button>
</form>