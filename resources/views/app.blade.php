<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">  
  @if (request()->is('table-product'))
    <link href="https://cdn.jsdelivr.net/npm/daisyui@1.16.2/dist/full.css" rel="stylesheet" type="text/css" />
  @endif
  <link rel="shortcut icon" href="{{asset('cleopatra/dist')}}/img/fav.png" type="image/x-icon">  
  <link rel="stylesheet" href="https://kit-pro.fontawesome.com/releases/v5.12.1/css/pro.min.css">
  <link rel="stylesheet" type="text/css" href="{{asset('cleopatra/dist')}}/css/style.css"> 
  @livewireStyles 
  <title>Warung Fajar</title>
  <style>
    .filterCategory::-webkit-scrollbar {
      height: 6px;
    }
    
    .filterCategory::-webkit-scrollbar-thumb {
      background-color: rgba(169, 169, 169, 0.699);
      border-radius: 10px
    }
  </style>
</head>
<body class="bg-gray-100" data-theme="light">

<x-navbar></x-navbar>

<div class="h-screen flex flex-row flex-wrap">
  

  <div class="bg-gray-100 flex-1 p-6 md:mt-16"> 
    @yield('content')
  </div>
</div>

<!-- script -->
@livewireScripts
@include('sweetalert::alert', ['cdn' => "https://cdn.jsdelivr.net/npm/sweetalert2@9"])
<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
<script src="https://cdn.jsdelivr.net/gh/livewire/turbolinks@v0.1.x/dist/livewire-turbolinks.js" data-turbolinks-eval="false" data-turbo-eval="false"></script>
<script src="{{asset('cleopatra/dist')}}/js/scripts.js"></script>
<!-- end script -->

</body>
</html>
