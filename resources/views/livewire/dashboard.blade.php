<div>
    <div class="card mt-10 p-10">
        <h6 class="mb-5 font-bold">Cari Barang</h6>
        <input type="text" class="border w-full p-3 rounded-lg" placeholder="search.." wire:model="search">
    </div>
    
    <section class="products mt-8">
        <div class="grid grid-cols-3 gap-3">
            @foreach ($products as $product)
                <div class="report-card">
                    <div class="card">
                        <div class="card-body flex flex-col">
                            <div class="mt-8">
                                <h3 class="">{{ $product->nama }}</h3>
                                <p>Modal : {{ number_format($product->modal) }}</p>
                            </div>
                            <div class="text-right">
                                <button wire:click="getProduct({{ $product->id }})">
                                    <i class="fas fa-pen-alt bg-blue-500 text-white p-1 rounded"></i>
                                </button>
                                <button wire:click='destroy({{$product->id}})'>
                                    <i class="fas fa-trash-alt bg-red-500 text-white p-1 rounded"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="footer bg-white p-1 mx-4 border border-t-0 rounded rounded-t-none"></div>
                </div>
            @endforeach
        </div>

        @if ($updateProduct)
            @livewire('update-product')
        @endif
    </section>
</div>
