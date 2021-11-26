<div>
    <div class="card mt-10 p-10 grid md:grid-cols-1 grid-cols-3 gap-5">
        <div class="searchProduct">
            <h6 class="mb-5 font-bold">Cari Barang</h6>
            <input type="text" class="border w-full p-3 rounded-lg" placeholder="search.." wire:model="search">
        </div>
        <div class="filterCategory pb-2 overflow-auto col-span-2" style="white-space: nowrap">
            <h6 class="mb-5 font-bold">Filter Kategori</h6>
            <input type="hidden" class="border" wire:model="filterCategory">
            @if ($filterCategory == 0)
                <button type="button" wire:click="filterCategory(0)" class="inline-flex items-center p-3 rounded bg-gray-900 text-white hover:opacity-50">
                    <i class="fad fa-clipboard-list-check text-xl mr-1"></i>
                    <small>semua</small>
                </button>
            @else
                <button type="button" wire:click="filterCategory(0)" class="inline-flex items-center p-3 rounded border border-gray-900 text-gray-900 hover:opacity-50">
                    <i class="fad fa-clipboard-list-check text-xl mr-1"></i>
                    <small>semua</small>
                </button>
            @endif
            @foreach ($categories as $category)
                @if ($filterCategory == $category->id)
                    <button type="button" wire:click="filterCategory({{ $category->id }})" class="inline-flex items-center p-3 rounded text-white hover:opacity-50" style="background-color: {{ $category->color }}">
                        <i class="fas fa-{{ $category->icon }} text-xl mr-1"></i>
                        <small>{{ $category->nama }}</small>
                    </button>
                @else
                    <button type="button" wire:click="filterCategory({{ $category->id }})" class="inline-flex items-center p-3 rounded hover:opacity-50 border bg-gray-100" style="border-color: {{ $category->color }}; color: {{ $category->color }}">
                        <i class="fas fa-{{ $category->icon }} text-xl mr-1"></i>
                        <small>{{ $category->nama }}</small>
                    </button>
                @endif
            @endforeach
        </div>
    </div>
    
    
    <section class="products mt-8">
        <div class="grid grid-cols-4 md:grid-cols-1 gap-3">
            @forelse ($products as $product)
                <div class="report-card">
                    <div class="card">
                        <div class="card-body flex flex-col relative">
                            <span class="category badge rounded-lg text-xs text-white absolute top-0 right-0 m-3" style="background: {{ $product->category->color }}">
                                <i class="fas fa-{{$product->category->icon}}"></i> {{ $product->category->nama }}
                            </span>
                            <div class="mt-8">
                                <h3>{{ $product->nama }}</h3>
                                <p>Modal : {{ number_format($product->modal) }}</p>
                            </div>
                            <div class="text-right">
                                <button wire:click="getProduct({{ $product->id }})">
                                    <i class="fas fa-pen-alt bg-blue-500 text-white p-1 rounded"></i>
                                </button>
                                <button onclick="return confirm('Ingin Menghapus Data?') || event.stopImmediatePropagation()" wire:click='destroy({{$product->id}})'>
                                    <i class="fas fa-trash-alt bg-red-500 text-white p-1 rounded"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="footer p-1 mx-4 border border-t-0 rounded rounded-t-none" style="background-color: {{ $product->category->color }}"></div>
                </div>
            @empty
            <div class="absolute">
                <h1 class="text-xl text-center">Tidak ada yang terkait dengan 
                    @if (!$search)
                        kategori ini
                    @else
                        <span class="font-bold">{{ $search }}</span>
                    @endif
                </h1>
            </div>
            @endforelse
        </div>

        @if ($updateProduct)
            @livewire('update-product')
        @endif
    </section>
</div>
