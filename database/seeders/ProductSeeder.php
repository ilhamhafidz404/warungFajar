<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::insert([
            [
                'nama' => 'GG Filter',
                'modal' => 17600,
                'harga_jual_minim' => 17600,
                'harga_jual_sedang' => 17600,
                'harga_jual_mahal' => 17600,
                'jumlah' => 45,
                'total' => 825750,
            ],
            [
                'nama' => 'GG Merah',
                'modal' => 17600,
                'harga_jual_minim' => 17600,
                'harga_jual_sedang' => 17600,
                'harga_jual_mahal' => 17600,
                'jumlah' => 45,
                'total' => 825750,
            ],
            [
                'nama' => 'GG Filter',
                'modal' => 17600,
                'harga_jual_minim' => 17600,
                'harga_jual_sedang' => 17600,
                'harga_jual_mahal' => 17600,
                'jumlah' => 45,
                'total' => 825750,
            ],
            [
                'nama' => 'Jarum Super 12',
                'modal' => 17600,
                'harga_jual_minim' => 17600,
                'harga_jual_sedang' => 17600,
                'harga_jual_mahal' => 17600,
                'jumlah' => 45,
                'total' => 825750,
            ],
            [
                'nama' => 'Sampoerna MILD 16',
                'modal' => 17600,
                'harga_jual_minim' => 17600,
                'harga_jual_sedang' => 17600,
                'harga_jual_mahal' => 17600,
                'jumlah' => 45,
                'total' => 825750,
            ],
            [
                'nama' => 'Sampoerna MILD 12',
                'modal' => 17600,
                'harga_jual_minim' => 17600,
                'harga_jual_sedang' => 17600,
                'harga_jual_mahal' => 17600,
                'jumlah' => 45,
                'total' => 825750,
            ],
        ]);
    }
}
