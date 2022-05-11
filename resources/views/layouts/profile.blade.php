<div class="hidden md:flex bg-white rounded-xl shadow-lg col-span-1 h-[150px]  p-3 flex-col gap-y-4">
    <div>
        <h1 class="text-2xl font-bold">profile</h1>
    </div>
    <div class="flex justify-between space-x-2 items-center">
        <div class="bg-gradient-to-tr from-gray-400 to-gray-300 w-[60px] h-[60px] rounded-lg">
        </div>
        <div class="flex-1 mx-auto truncate flex items-center justify-between space-x-3 ">
            <h2 class="font-semibold">{{ auth()->user()->name }}</h2>
            <i class="fa-solid fa-circle fa-lg icon-green -mb-1"></i>
        </div>

    </div>
</div>