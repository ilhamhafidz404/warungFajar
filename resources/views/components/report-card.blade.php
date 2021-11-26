<div class="mt-20">
    <div class="grid grid-cols-4 gap-6 md:hidden mt-20">
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
    </div> 
    <div class="hidden md:block shadow" style="overflow: auto">
        <table class="table w-full table-zebra">
          <tr>
              <td class="text-gray-800">
                  <div class="h6 text-indigo-700 fad fa-shopping-cart mr-2"></div>
                  Total Dagangan
              </td>
              <td class="text-gray-800">
                {{ $products->count() }}
              </td>
          </tr>
          <tr>
              <td class="text-gray-800">
                  <div class="h6 text-red-700 fad fa-store mr-2"></div>
                  Keseluruhan Modal
              </td>
              <td class="text-gray-800">
                Rp. {{ number_format($productModal) }}
              </td>
          </tr>
          <tr>
              <td class="text-gray-800">
                  <div class="h6 text-yellow-600 fad fa-sitemap mr-2"></div>
                  Keseluruhan Jumlah
              </td>
              <td class="text-gray-800">
                Rp. {{ number_format($productJumlah) }}
              </td>
          </tr>
          <tr>
              <td class="text-gray-800">
                  <div class="h6 text-green-700 fad fa-users mr-2"></div>
                  Keseluruhan Total
              </td>
              <td class="text-gray-800">
                Rp. {{ number_format($productTotal) }}
              </td>
          </tr>
        </table>
    </div>
</div>