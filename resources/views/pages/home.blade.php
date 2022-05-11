@extends('layouts.master')

@section('title')
    home
@endsection

@section('content')
    <div class="bg-gray-100 w-screen rounded-t-[40px] pb-8 flex flex-col items-center text-gray-600">
        <div class="w-full max-w-[76rem] mx-auto grid grid-cols-1 md:grid-cols-5 gap-x-3 mt-8">
            @include('layouts.profile')
            <div class="col-span-4 p-4 bg-white shadow-xl rounded-xl flex flex-col gap-y-4">
                @include('layouts.navigator')
                <div class="flex justify-between items-start">
                    <div class="w-[400px] flex flex-col gap-y-3">
                        <h1 class="font-bold text-[39px]">Halo <span>{{ auth()->user()->name }}</span>, selamat datang di aplikasi peduli diri</h1>
                    <a href="/input" class="w-[210px] font-semibold py-3 text-center rounded-full text-white bg-red-400 ring-1 ring-white">
                            isi catatan perjalanan  <i class="fa-solid fa-pen-clip fa-lg icon-white"></i>
                        </a>
                    </div>
                    <div class="-translate-y-[72px]">
                        @include('layouts.homesvg')
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection