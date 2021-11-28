<div class="md:fixed md:w-full md:top-0 md:z-20 flex flex-row flex-wrap items-center bg-white p-6 border-b border-gray-300">
    <div class="flex-none w-56 flex flex-row items-center">
      <img src="{{asset('cleopatra/dist')}}/img/logo.png" class="w-10 flex-none">
      <strong class="capitalize ml-1 flex-1 text-gray-900">
          <a href="{{ route('debug') }}">Warung Fajar</a>
      </strong>
    </div> 
    
    <button id="navbarToggle" class="hidden md:block md:fixed right-0 mr-6">
      <i class="fad fa-chevron-double-down"></i>
    </button>

    <div id="navbar" class="animated md:hidden md:fixed md:top-0 md:w-full md:left-0 md:mt-16 md:border-t md:border-b md:border-gray-200 md:p-10 md:bg-white flex-1 pl-3 flex flex-row flex-wrap justify-between items-center md:flex-col md:items-center">
        <div class="flex flex-row-reverse items-center">
            <ul class="flex md:block items-center">
                <li class="mr-5 md:mb-3 md:text-center">
                    <a href="{{ route('dashboard') }}" class="hover:text-gray-500 text-gray-900 {{request()->is('/') ? 'text-blue-400' : ''}}">Dashboard</a>
                </li>
                <li class="mr-5 md:mb-3 md:text-center">
                    <a href="{{ route('table-product') }}" class="hover:text-gray-500 text-gray-900 {{request()->is('table-product') ? 'text-blue-400' : ''}}" class="hover:text-gray-500">Tabel Produk</a>
                </li>
                <li class="mr-5 md:mb-3 md:text-center">
                    <a href="{{ route('add-product') }}" class="hover:text-gray-500 text-gray-900 {{request()->is('add-product') ? 'text-blue-400' : ''}}" class="hover:text-gray-500">Tambah Produk</a>
                </li>
            </ul>
        </div>
        <div class="md:hidden flex flex-row-reverse items-center"> 
            <div class="dropdown relative md:static">
                <button class="menu-btn focus:outline-none focus:shadow-outline flex flex-wrap items-center">
                    <div class="w-8 h-8 overflow-hidden rounded-full">
                        <img class="w-full h-full object-cover" src="{{asset('cleopatra/dist')}}/img/user.svg" >
                    </div> 
                    <div class="ml-2 capitalize flex ">
                        <h1 class="text-sm text-gray-800 font-semibold m-0 p-0 leading-none">Dika Fajar</h1>
                    </div>                        
                </button>
            </div>
        </div>
    </div>
</div>