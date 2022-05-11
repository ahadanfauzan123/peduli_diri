@extends('layouts.master')

@section('title')
    data
@endsection

@section('content')
    <div class="bg-gray-200 w-screen min-h-screen rounded-t-[40px] pb-8 flex flex-col items-center text-gray-600">
        <div class="w-full max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-5 gap-x-3 mt-8">
            @include('layouts.profile')
            <div class="col-span-3 flex flex-col gap-y-4">
                <div class="p-4 bg-white shadow-lg rounded-xl flex flex-col gap-y-4">
                    @include('layouts.navigator')
                    {{-- search --}}
                    <form action="/search" method="GET">
                        <div class="flex">
                            <select onchange="select(this)" name="search" id="" class="rounded-l-2xl h-[60px] w-[80px] bg-gray-200 text-black border-2 border-gray-300 border-r-0">
                                <option value="tanggal">tanggal</option>
                                <option value="jam">jam</option>
                                <option value="lokasi">lokasi</option>
                                <option value="suhu">suhu</option>
                            </select>
                            <input type="date" name="tanggal" id="tanggal" class="px-4 w-[450px] h-[60px] text-2xl font-bold border-2 border-gray-300 border-l-0 bg-gray-200">
                            <input type="time" name="jam" id="jam" class="px-4 w-[450px] h-[60px] text-2xl font-bold border-2 border-gray-300 border-l-0 bg-gray-200">
                            <input type="text" name="lokasi" id="lokasi" class="px-4 w-[450px] h-[60px] text-2xl font-bold border-2 border-gray-300 border-l-0 bg-gray-200">
                            <input type="text" name="suhu" id="suhu" class="px-4 w-[450px] h-[60px] text-2xl font-bold border-2 border-gray-300 border-l-0 bg-gray-200">
                            <button type="submit" class="w-[80px] h-[60px] bg-green-300 ring-0 rounded-r-2xl text-white font-semibold shadow-sm">
                               <i class="fa-solid fa-magnifying-glass icon-dark"></i>
                            </button>
                        </div>
                    </form>
                </div>
                <div class="p-4 bg-white shadow-lg rounded-xl flex flex-col gap-y-4 min-h-[200px]">
                    @include('layouts.table')
                </div>
                <div class="w-full max-w-lg mx-auto">
                    {{ $perjalanan->links() }}
                </div>
            </div>
            @include('layouts.notifications')
        </div>
    </div>
@endsection