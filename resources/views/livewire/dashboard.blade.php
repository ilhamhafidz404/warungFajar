<div>
    <div class="card mt-10 p-10">
        <h6 class="mb-5 font-bold">Cari Barang</h6>
        <input type="text" class="border w-full p-3 rounded-lg" placeholder="search.." wire:model="search">
    </div>
    
    <section class="products mt-8">
        <div class="grid grid-cols-3 gap-3">
            @foreach ($products as $product)
                <div class="card p-3">
                    <h1>{{$product->nama}}</h1>
                    <div class="mt-2 flex justify-between">
                        <small class="text-gray-500">Rp. {{number_format($product->modal)}}</small>
                        <small class="bg-red-500 px-3 rounded-lg text-white">{{number_format($product->jumlah)}}</small>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
</div>
