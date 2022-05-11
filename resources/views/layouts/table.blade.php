<table class="table-fixed border-collapse border border-gray-300 ">
    <thead class="h-[70px]">
        <tr>
          <th onclick="showtanggal()" class=" relative border border-gray-300 bg-gray-200 ...">
            tanggal <i class="fa-solid fa-calendar-day mr-2"></i>
              <i class="fa-solid fa-sort-down fa-sm"></i>
              <form method="GET" action="/orderBySearch" id="formtanggal" class="origin-top-right absolute right-0 mt-2 w-full flex flex-col gap-y-3 bg-gray-300 p-2">
                @csrf
                <button type="submit" name='tanggalAsc' value="ASC">Terlama</button>
                <button type="submit" name='tanggalDesc' value="DESC">Terbaru</button>
              </form>
          </th>
          <th onclick="showjam()" class="relative border border-gray-300 bg-gray-200 ...">
            jam <i class="fa-solid fa-clock mr-2"></i>
            <i class="fa-solid fa-sort-down fa-sm"></i>
            <form method="GET" action="/orderBySearch" id="formjam" class="origin-top-right absolute right-0 mt-2 w-full flex flex-col gap-y-3 bg-gray-300 p-2">
              @csrf
              <button type="submit" name='jamAsc' value="ASC">Terlama</button>
              <button type="submit" name='jamDesc' value="DESC">Terbaru</button>
            </form>
          </th>
          <th class="relative border border-gray-300 bg-gray-200 ...">
            lokasi 
            <i class="fa-solid fa-location-dot mr-2"></i>
          </th>
          <th onclick="showsuhu()" class="relative border border-gray-300 bg-gray-200 ...">
            suhu 
            <i class="fa-solid fa-temperature-high mr-2"></i>
            <i class="fa-solid fa-sort-down fa-sm"></i>
            <form method="GET" action="/orderBySearch" id="formsuhu" class="origin-top-right absolute right-0 mt-2 w-full flex flex-col gap-y-3 bg-gray-300 p-2">
              @csrf
              <button type="submit" name='suhuAsc' value="ASC">Terendah</button>
              <button type="submit" name='suhuDesc' value="DESC">Tertinggi</button>
            </form>
          </th>
        </tr>
      </thead>
      <tbody>
        @foreach ($perjalanan as $item)
            <tr class="h-[60px] text-center">
              <td class="border border-gray-200 w-[20%]">{{ $item->tanggal }}</td>
              <td class="border border-gray-200 w-[20%]">{{ $item->jam }}</td>
              <td class="border border-gray-200 w-[20%]">{{ $item->lokasi }}</td>
              <td class="border border-gray-200 w-[20%]">{{ $item->suhu }}</td>
            </tr>
        @endforeach
      </tbody>
</table>