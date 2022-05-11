@extends('layouts.master')

@section('title')
    register
@endsection

@section('content')
    <div class="bg-gray-200 w-screen min-h-screen rounded-t-[40px] flex flex-col items-center text-gray-600">
        <div class="w-full bg-white max-w-2xl mx-auto mt-8 drop-shadow-xl p-4 rounded-2xl">
            <div>
                <h1 class="text-2xl font-bold text-center">Register</h1>
            </div>
            @if(session()->has('register_gagal'))
            <div class="w-[80%] mx-auto bg-red-400 rounded-xl text-white py-5 text-center">
                        <span class="mx-auto text-white text-lg font-light">{{ session('register_gagal') }}</span>
            </div>
            @endif
            <form action="/register" method="POST" class="relative flex flex-col items-center gap-y-4 w-full min-h-[350px]">
                @csrf
                <div class="flex flex-col gap-y-2">
                    <label for="name" class="text-xl font-semibold">name: </label>
                    <input type="text" name="name" id="name" class="px-4 w-[450px] h-[60px] text-2xl font-bold rounded-2xl border-2 border-gray-300 bg-gray-200 @error('name') border-2 border-red-400 @enderror">
                </div>
                {{-- <div class="flex flex-col gap-y-2">
                    <label for="email" class="text-xl font-semibold">email: </label>
                    <input type="text" name="email" id="email" class="px-4 w-[450px] h-[60px] text-2xl font-bold rounded-2xl border-2 border-gray-300 bg-gray-200">
                </div> --}}
                <div class="flex flex-col gap-y-2">
                    <label for="nik" class="text-xl font-semibold">nik: </label>
                    <input type="password" name="password" id="nik" class="px-4 w-[450px] h-[60px] text-2xl font-bold rounded-2xl border-2 border-gray-300 bg-gray-200 @error('password') border-2 border-red-400 @enderror">
                </div>
                <div class="flex justify-between items-center w-[450px]">
                    <p class="text-lg font-light">Sudah punya akun? <a href="/login" class="text-blue-400 font-semibold">Login</a></p>
                    <button type="submit" class="bottom-0 right-0 w-[120px] h-[50px] bg-blue-400 ring-1 ring-gray-100 rounded-full text-white font-semibold shadow-sm">
                        Register
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection