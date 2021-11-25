<div class="container mx-auto mt-10">
    <div class="card p-5">
        <form wire:submit.prevent="store">
            <div class="form-group mb-8">
                <label for="nama" class="text-gray-600">Nama Produk</label><br>
                <input type="text" name="nama" class=" mt-3 border w-full rounded-lg p-2 @error('nama') border-red-500 @enderror " id="nama" wire:model="nama">
                @error('nama')
                    <small class="text-red-500">{{$message}}</small>
                @enderror
            </div>
            <div class="form-group mb-8">
                <label for="modal" class="text-gray-600">Modal</label><br>
                <input type="number" name="modal" class=" mt-3 border w-full rounded-lg p-2 @error('modal') border-red-500 @enderror" id="modal" wire:model="modal">
                @error('modal')
                    <small class="text-red-500">{{$message}}</small>
                @enderror
            </div>
            <div class="grid grid-cols-3 gap-4">
                <div class="form-group mb-8">
                    <label for="harga_jual_minim" class="text-gray-600">Harga Jual Minim</label><br>
                    <input type="number" name="harga_jual_minim" class=" mt-3 border w-full rounded-lg p-2 @error('harga_jual_minim') border-red-500 @enderror" id="harga_jual_minim" wire:model="harga_jual_minim">
                    @error('harga_jual_minim')
                        <small class="text-red-500">{{$message}}</small>
                    @enderror
                </div>
                <div class="form-group mb-8">
                    <label for="harga_jual_sedang" class="text-gray-600">Harga Jual Sedang</label><br>
                    <input type="number" name="harga_jual_sedang" class=" mt-3 border w-full rounded-lg p-2 @error('harga_jual_sedang') border-red-500 @enderror" id="harga_jual_sedang" wire:model="harga_jual_sedang">
                    @error('sedang')
                        <small class="text-red-500">{{$message}}</small>
                    @enderror
                </div>
                <div class="form-group mb-8">
                    <label for="harga_jual_mahal" class="text-gray-600">Harga Jual Mahal</label><br>
                    <input type="number" name="harga_jual_mahal" class=" mt-3 border w-full rounded-lg p-2 @error('harga_jual_mahal') border-red-500 @enderror" id="harga_jual_mahal" wire:model="harga_jual_mahal">
                    @error('harga_jual_mahal')
                        <small class="text-red-500">{{$message}}</small>
                    @enderror
                </div>
            </div>
            <div class="grid grid-cols-2 gap-4">
                <div class="form-group mb-8">
                    <label for="jumlah" class="text-gray-600">Jumlah</label><br>
                    <input type="number" name="jumlah" class=" mt-3 border w-full rounded-lg p-2 @error('jumlah') border-red-500 @enderror" id="jumlah" wire:model="jumlah">
                    @error('jumlah')
                        <small class="text-red-500">{{$message}}</small>
                    @enderror
                </div>
                <div class="form-group mb-8">
                    <label for="total" class="text-gray-600">Total</label><br>
                    <input type="number" name="total" class=" mt-3 border w-full rounded-lg p-2 @error('total') border-red-500 @enderror" id="total" wire:model="total">
                    @error('total')
                        <small class="text-red-500">{{$message}}</small>
                    @enderror
                </div>
            </div>

            <div class="flex justify-between w-full mt-10">
                <a href="{{ route('dashboard') }}" class="border border-red-500 px-10 py-2 rounded text-red-500 hover:bg-red-500 hover:text-white">kembali</a>
                <div class="flex">
                    <button type="reset" class="hover:bg-red-400 bg-red-500 mr-5 px-10 py-2 rounded text-white">Reset</button>
                    <button class="hover:bg-blue-300 bg-blue-400 px-20 py-2 rounded text-white">Submit</button>
                </div>
            </div>
        </form>
    </div>
</div>
