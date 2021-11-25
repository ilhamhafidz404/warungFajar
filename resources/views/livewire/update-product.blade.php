<div>
    <div id="overlay" class="fixed left-0 top-0 right-0 bottom-0" style="background-color: rgba(0, 0, 0, 0.5)">
        <button class="absolute right-0 m-20" wire:click="closeModalUpdateProduct()">
            <i class="fas fa-times text-white text-3xl"></i>
        </button>
        <div class="card w-1/2 absolute" style="left: 50%; top: 50%; transform: translate(-50%, -50%)">
            <div class="card-header p-5 bg-gray-200">
                <h1>Edit Dagangan</h1>
            </div>
            <div class="card-body">
                <form wire:submit.prevent="update">
                    <input type="hidden" name="id" wire:model.defer="productId">
                    <div class="grid grid-cols-2 gap-4">
                        <div class="form-group mb-5">
                            <label for="nama" class="text-gray-600">Nama Produk</label><br>
                            <input type="text" name="nama" class=" mt-3 border w-full rounded-lg p-2 @error('nama') border-red-500 @enderror " id="nama" wire:model.defer="nama">
                            @error('nama')
                                <small class="text-red-500">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="form-group mb-5">
                            <label for="modal" class="text-gray-600">Modal</label><br>
                            <input type="number" name="modal" class=" mt-3 border w-full rounded-lg p-2 @error('modal') border-red-500 @enderror" id="modal" wire:model.defer="modal">
                            @error('modal')
                                <small class="text-red-500">{{$message}}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="grid grid-cols-3 gap-4">
                        <div class="form-group mb-5">
                            <label for="harga_jual_minim" class="text-gray-600">Harga Jual Minim</label><br>
                            <input type="number" name="harga_jual_minim" class=" mt-3 border w-full rounded-lg p-2 @error('harga_jual_minim') border-red-500 @enderror" id="harga_jual_minim" wire:model.defer="harga_jual_minim">
                            @error('harga_jual_minim')
                                <small class="text-red-500">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="form-group mb-5">
                            <label for="harga_jual_sedang" class="text-gray-600">Harga Jual Sedang</label><br>
                            <input type="number" name="harga_jual_sedang" class=" mt-3 border w-full rounded-lg p-2 @error('harga_jual_sedang') border-red-500 @enderror" id="harga_jual_sedang" wire:model.defer="harga_jual_sedang">
                            @error('sedang')
                                <small class="text-red-500">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="form-group mb-5">
                            <label for="harga_jual_mahal" class="text-gray-600">Harga Jual Mahal</label><br>
                            <input type="number" name="harga_jual_mahal" class=" mt-3 border w-full rounded-lg p-2 @error('harga_jual_mahal') border-red-500 @enderror" id="harga_jual_mahal" wire:model.defer="harga_jual_mahal">
                            @error('harga_jual_mahal')
                                <small class="text-red-500">{{$message}}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="grid grid-cols-2 gap-4">
                        <div class="form-group mb-5">
                            <label for="jumlah" class="text-gray-600">Jumlah</label><br>
                            <input type="number" name="jumlah" class=" mt-3 border w-full rounded-lg p-2 @error('jumlah') border-red-500 @enderror" id="jumlah" wire:model.defer="jumlah">
                            @error('jumlah')
                                <small class="text-red-500">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="form-group mb-5">
                            <label for="total" class="text-gray-600">Total</label><br>
                            <input type="number" name="total" class=" mt-3 border w-full rounded-lg p-2 @error('total') border-red-500 @enderror" id="total" wire:model.defer="total">
                            @error('total')
                                <small class="text-red-500">{{$message}}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="flex justify-end w-full">
                        <button class="hover:bg-blue-400 bg-blue-500 px-20 py-2 rounded text-white mt-5">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
