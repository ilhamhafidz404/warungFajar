<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">  
  <link rel="shortcut icon" href="{{asset('cleopatra/dist')}}/img/fav.png" type="image/x-icon">  
  <link rel="stylesheet" href="https://kit-pro.fontawesome.com/releases/v5.12.1/css/pro.min.css">
  <link rel="stylesheet" type="text/css" href="{{asset('cleopatra/dist')}}/css/style.css">  
  <title>Warung Fajar</title>
</head>
<body class="bg-gray-100">


<div class="md:fixed md:w-full md:top-0 md:z-20 flex flex-row flex-wrap items-center bg-white p-6 border-b border-gray-300">
    <div class="flex-none w-56 flex flex-row items-center">
      <img src="{{asset('cleopatra/dist')}}/img/logo.png" class="w-10 flex-none">
      <strong class="capitalize ml-1 flex-1">Warung Fajar</strong>

      <button id="sliderBtn" class="flex-none text-right text-gray-900 hidden md:block">
        <i class="fad fa-list-ul"></i>
      </button>
    </div> 
    
    <button id="navbarToggle" class="hidden md:block md:fixed right-0 mr-6">
      <i class="fad fa-chevron-double-down"></i>
    </button>

    <div id="navbar" class="animated md:hidden md:fixed md:top-0 md:w-full md:left-0 md:mt-16 md:border-t md:border-b md:border-gray-200 md:p-10 md:bg-white flex-1 pl-3 flex flex-row flex-wrap justify-end items-center md:flex-col md:items-center">     
        <div class="flex flex-row-reverse items-center"> 
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


<div class="h-screen flex flex-row flex-wrap">
  <div id="sideBar" class="relative flex flex-col flex-wrap bg-white border-r border-gray-300 p-6 flex-none w-64 md:-ml-64 md:fixed md:top-0 md:z-30 md:h-screen md:shadow-xl animated faster">
    <div class="flex flex-col">
        <a href="{{asset('cleopatra/dist')}}/index.html" class="mb-3 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
            <i class="fad fa-chart-pie text-xs mr-2"></i>                
            Dashboard
        </a>
    </div>
  </div>

  <div class="bg-gray-100 flex-1 p-6 md:mt-16"> 
    <div class="grid grid-cols-4 gap-6 xl:grid-cols-1">
        <div class="report-card">
            <div class="card">
                <div class="card-body flex flex-col">
                    
                    <!-- top -->
                    <div class="flex flex-row justify-between items-center">
                        <div class="h6 text-indigo-700 fad fa-shopping-cart"></div>
                        <span class="rounded-full text-white badge bg-teal-400 text-xs">
                            12%
                            <i class="fal fa-chevron-up ml-1"></i>
                        </span>
                    </div>
                    <!-- end top -->

                    <!-- bottom -->
                    <div class="mt-8">
                        <h1 class="h5 num-4"></h1>
                        <p>items sales</p>
                    </div>                
                    <!-- end bottom -->
        
                </div>
            </div>
            <div class="footer bg-white p-1 mx-4 border border-t-0 rounded rounded-t-none"></div>
        </div>
        <div class="report-card">
            <div class="card">
                <div class="card-body flex flex-col">
                    
                    <!-- top -->
                    <div class="flex flex-row justify-between items-center">
                        <div class="h6 text-red-700 fad fa-store"></div>
                        <span class="rounded-full text-white badge bg-red-400 text-xs">
                            6%
                            <i class="fal fa-chevron-down ml-1"></i>
                        </span>
                    </div>
                    <!-- end top -->

                    <!-- bottom -->
                    <div class="mt-8">
                        <h1 class="h5 num-4"></h1>
                        <p>new orders</p>
                    </div>                
                    <!-- end bottom -->
        
                </div>
            </div>
            <div class="footer bg-white p-1 mx-4 border border-t-0 rounded rounded-t-none"></div>
        </div>
        <div class="report-card">
            <div class="card">
                <div class="card-body flex flex-col">
                    
                    <!-- top -->
                    <div class="flex flex-row justify-between items-center">
                        <div class="h6 text-yellow-600 fad fa-sitemap"></div>
                        <span class="rounded-full text-white badge bg-teal-400 text-xs">
                            72%
                            <i class="fal fa-chevron-up ml-1"></i>
                        </span>
                    </div>
                    <!-- end top -->

                    <!-- bottom -->
                    <div class="mt-8">
                        <h1 class="h5 num-4"></h1>
                        <p>total Products</p>
                    </div>                
                    <!-- end bottom -->
        
                </div>
            </div>
            <div class="footer bg-white p-1 mx-4 border border-t-0 rounded rounded-t-none"></div>
        </div>
        <div class="report-card">
            <div class="card">
                <div class="card-body flex flex-col">
                    
                    <!-- top -->
                    <div class="flex flex-row justify-between items-center">
                        <div class="h6 text-green-700 fad fa-users"></div>
                        <span class="rounded-full text-white badge bg-teal-400 text-xs">
                            150%
                            <i class="fal fa-chevron-up ml-1"></i>
                        </span>
                    </div>
                    <!-- end top -->

                    <!-- bottom -->
                    <div class="mt-8">
                        <h1 class="h5 num-4"></h1>
                        <p>new Visitor</p>
                    </div>                
                    <!-- end bottom -->
        
                </div>
            </div>
            <div class="footer bg-white p-1 mx-4 border border-t-0 rounded rounded-t-none"></div>
        </div>
    </div>
  </div>

</div>

<!-- script -->
<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
<script src="{{asset('cleopatra/dist')}}/js/scripts.js"></script>
<!-- end script -->

</body>
</html>
