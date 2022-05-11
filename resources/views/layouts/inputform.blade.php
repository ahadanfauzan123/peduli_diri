<form action="/inputPerjalanan" method="POST" class="relative flex flex-col gap-y-4 w-full max-w-[80%] h-[370px]">
    @csrf
    <div class="flex justify-between items-center">
        <input type="hidden" name="user_id" value="{{ auth()->user()->id }}" class="px-4 w-[450px] h-[60px] text-2xl font-bold rounded-2xl border-2 border-gray-300 bg-gray-200">
    </div>
    <div class="flex justify-between items-center">
        <label for="tanggalinput" class="text-xl font-semibold">Tanggal: </label>
        <input type="date" name="tanggal" id="tanggalinput" class="px-4 w-[450px] h-[60px] text-2xl font-bold rounded-2xl border-2 border-gray-300 bg-gray-200">
    </div>
    <div class="flex justify-between items-center">
        <label for="jaminput" class="text-xl font-semibold">Jam: </label>
        <input type="time" name="jam" id="jaminput" class="px-4 w-[450px] h-[60px] text-2xl font-bold rounded-2xl border-2 border-gray-300 bg-gray-200">
    </div>
    <div class="flex justify-between items-center">
        <label for="lokasiinput" class="text-xl font-semibold">Lokasi yang Dikunjungi: </label>
        <input type="text" name="lokasi" id="lokasiinput" class="px-4 w-[450px] h-[60px] text-2xl font-bold rounded-2xl border-2 border-gray-300 bg-gray-200">
    </div>
    <div class="flex justify-between items-center">
        <label for="suhuinput" class="text-xl font-semibold">Suhu Tubuh: </label>
        <input type="tel" name="suhu" id="suhuinput" class="px-4 w-[450px] h-[60px] text-2xl font-bold rounded-2xl border-2 border-gray-300 bg-gray-200">
    </div>
    <button type="submit" class="absolute bottom-0 right-0 w-[120px] h-[50px] bg-blue-400 ring-1 ring-gray-100 rounded-full text-white font-semibold shadow-sm">simpan</button>
</form>