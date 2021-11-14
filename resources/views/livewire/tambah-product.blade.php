<div class="container mx-auto mt-10">
    <div class="card p-5">
        <form wire:submit.prevent="store">
            <div class="form-group mb-8">
                <label for="nama" class="text-gray-600">Nama Produk</label><br>
                <input type="text" name="nama" class=" mt-3 border w-full rounded-lg p-2" id="nama" wire:model="nama">
            </div>
            <div class="form-group mb-8">
                <label for="modal" class="text-gray-600">Modal</label><br>
                <input type="number" name="modal" class=" mt-3 border w-full rounded-lg p-2" id="modal" wire:model="modal">
            </div>
            <div class="form-group mb-8">
                <label for="harga_jual_minim" class="text-gray-600">Harga Jual Minim</label><br>
                <input type="number" name="harga_jual_minim" class=" mt-3 border w-full rounded-lg p-2" id="harga_jual_minim" wire:model="harga_jual_minim">
            </div>
            <div class="form-group mb-8">
                <label for="harga_jual_sedang" class="text-gray-600">Harga Jual Sedang</label><br>
                <input type="number" name="harga_jual_sedang" class=" mt-3 border w-full rounded-lg p-2" id="harga_jual_sedang" wire:model="harga_jual_sedang">
            </div>
            <div class="form-group mb-8">
                <label for="harga_jual_mahal" class="text-gray-600">Harga Jual Mahal</label><br>
                <input type="number" name="harga_jual_mahal" class=" mt-3 border w-full rounded-lg p-2" id="harga_jual_mahal" wire:model="harga_jual_mahal">
            </div>
            <div class="form-group mb-8">
                <label for="jumlah" class="text-gray-600">Jumlah</label><br>
                <input type="number" name="jumlah" class=" mt-3 border w-full rounded-lg p-2" id="jumlah" wire:model="jumlah">
            </div>
            <div class="form-group mb-8">
                <label for="total" class="text-gray-600">Total</label><br>
                <input type="number" name="total" class=" mt-3 border w-full rounded-lg p-2" id="total" wire:model="total">
            </div>

            <button class="bg-blue-500 px-10 py-2 rounded text-white">Submit</button>
        </form>
    </div>
</div>
