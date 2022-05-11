<div class="w-screen flex justify-center items-center h-[90px] ">
    <div class="flex justify-between items-center w-full h-full max-w-6xl mx-auto px-4">
      {{-- <img src="{{ asset('image/icon.png') }}" class="" alt=""> --}}
        <h1 class="text-gray-100 text-4xl font-bold  "><span class="text-green-300">p</span>diri</h1>
        {{-- <a href="#" class="w-[80px] rounded-full bg-red-400 p-4 text-white">logout</a> --}}
        @auth
            
        <div class="ml-3 relative">
          <div>
                <button onclick="showmenu()" type="button">
                    <i class="fa-solid fa-bars-staggered fa-2xl icon-white"></i>
                </button>
              </div>
              <div id="navmenu" class="hidden flex-col gap-y-3 z-50 origin-top-right absolute right-0 mt-2 w-48 rounded-md shadow-lg py-1 bg-white ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1">
              <!-- Active: "bg-gray-100", Not Active: "" -->
              <div onclick="hidemenu()" class="h-7 w-7 flex justify-center items-center rounded-full bg-red-400 -ml-2 -mt-2 cursor-pointer hover:scale-105 transition-all duration-200">
                  <i class="fa-solid fa-xmark icon-white"></i>
              </div>
              <a href="/" class="flex space-x-3 items-center px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-0">
                <i class="fa-solid fa-house-chimney fa-md"></i>
                <span>Dashboard</span>
              </a>
              <a href="/data" class="flex space-x-3 items-center px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-1">
                <i class="fa-solid fa-location-dot fa-md"></i> 
                <span>Data</span>
              </a>
              <form action="/logout" method="POST">
                @csrf
                <button type="submit" class="flex space-x-3 items-center cursor-pointer px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-2">
                  <i class="fa-solid fa-arrow-right-from-bracket fa-md"></i>
                  <span>logout</span>
                </button>
              </form>
            </div>
        </div>
      @endauth
  </div>
</div>