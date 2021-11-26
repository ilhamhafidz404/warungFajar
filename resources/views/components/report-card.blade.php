<div class="grid grid-cols-4 gap-6 xl:grid-cols-1 mt-20">
    @if (!request()->is('update-product'))
    <div class="report-card">
        <div class="card">
            <div class="card-body flex flex-col">
                
                <!-- top -->
                <div class="flex flex-row justify-between items-center">
                    <div class="h6 text-indigo-700 fad fa-shopping-cart"></div>
                </div>
                <!-- end top -->
                <!-- bottom -->
                <div class="mt-8">
                    <h1 class="h5 text-gray-800">{{ $products->count() }}</h1>
                    <p class="text-gray-600">Total Dagangan</p>
                </div>                
                <!-- end bottom -->
    
            </div>
        </div>
    </div>
    <div class="report-card">
        <div class="card">
            <div class="card-body flex flex-col">
                
                <!-- top -->
                <div class="flex flex-row justify-between items-center">
                    <div class="h6 text-red-700 fad fa-store"></div>
                </div>
                <!-- end top -->

                <!-- bottom -->
                <div class="mt-8">
                    <h1 class="h5 text-gray-800">Rp. {{ number_format($productModal) }}</h1>
                    <p class="text-gray-600">Keseluruhan Modal</p>
                </div>                
                <!-- end bottom -->
    
            </div>
        </div>
    </div>
    <div class="report-card">
        <div class="card">
            <div class="card-body flex flex-col">
                
                <!-- top -->
                <div class="flex flex-row justify-between items-center">
                    <div class="h6 text-yellow-600 fad fa-sitemap"></div>
                </div>
                <!-- end top -->

                <!-- bottom -->
                <div class="mt-8">
                    <h1 class="h5 text-gray-800">Rp. {{ number_format($productJumlah) }}</h1>
                    <p class="text-gray-600">Keseluruhan Jumlah</p>
                </div>                
                <!-- end bottom -->
    
            </div>
        </div>
    </div>
    <div class="report-card">
        <div class="card">
            <div class="card-body flex flex-col">
                
                <!-- top -->
                <div class="flex flex-row justify-between items-center">
                    <div class="h6 text-green-700 fad fa-users"></div>
                </div>
                <!-- end top -->

                <!-- bottom -->
                <div class="mt-8">
                    <h1 class="h5 text-gray-800">Rp. {{ number_format($productTotal) }}</h1>
                    <p class="text-gray-600">Keseluruhan Total</p>
                </div>                
                <!-- end bottom -->
    
            </div>
        </div>
    </div> 
    @endif
</div>