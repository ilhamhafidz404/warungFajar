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
                <form action="">
                    <div class="form-group mb-8">
                        <label for="nama" class="text-gray-600">Nama Barang</label><br>
                        <input type="text" name="nama" class="mt-3 border w-full rounded-lg p-2 @error('nama') border-red-500 @enderror" id="nama" wire:model="nama" placeholder="">
                        @error('nama')
                            <small class="text-red-500">{{$message}}</small>
                        @enderror
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>