<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">  
  <link rel="shortcut icon" href="{{asset('cleopatra/dist')}}/img/fav.png" type="image/x-icon">  
  <link rel="stylesheet" href="https://kit-pro.fontawesome.com/releases/v5.12.1/css/pro.min.css">
  <link rel="stylesheet" type="text/css" href="{{asset('cleopatra/dist')}}/css/style.css"> 
  @livewireStyles 
  <title>Warung Fajar</title>
</head>
<body class="bg-gray-100">

<x-navbar></x-navbar>

<div class="h-screen flex flex-row flex-wrap">
  

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
    @yield('content')
  </div>
</div>

<!-- script -->
@livewireScripts
<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
<script src="https://cdn.jsdelivr.net/gh/livewire/turbolinks@v0.1.x/dist/livewire-turbolinks.js" data-turbolinks-eval="false" data-turbo-eval="false"></script>
<script src="{{asset('cleopatra/dist')}}/js/scripts.js"></script>
<!-- end script -->

</body>
</html>
