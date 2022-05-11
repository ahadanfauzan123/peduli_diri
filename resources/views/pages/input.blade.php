@extends('layouts.master')

@section('title')
    input
@endsection

@section('content')
    <div class="bg-gray-200 w-screen min-h-screen rounded-t-[40px] pb-8 flex flex-col items-center text-gray-600">
        <div class="w-full max-w-7xl mx-auto grid grid-cols-4 gap-x-3 mt-8">
            @include('layouts.profile')
            <div class="col-span-3 flex flex-col gap-y-4">
                <div class="p-4 bg-white shadow-lg rounded-xl flex flex-col gap-y-4">
                    @include('layouts.navigator')
                </div>
                <div class="p-4 bg-white shadow-lg rounded-xl flex flex-col items-center gap-y-4 min-h-[400px]">
                    @include('layouts.inputform')
                </div>
            </div>
        </div>
    </div>
@endsection