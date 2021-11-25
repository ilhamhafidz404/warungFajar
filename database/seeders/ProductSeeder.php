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
                'category_id' => 1,
                'modal' => 17600,
                'harga_jual_minim' => 17600,
                'harga_jual_sedang' => 17600,
                'harga_jual_mahal' => 17600,
                'jumlah' => 45,
                'total' => 825750,
            ],
            [
                'nama' => 'GG Merah',
                'category_id' => 2,
                'modal' => 17600,
                'harga_jual_minim' => 17600,
                'harga_jual_sedang' => 17600,
                'harga_jual_mahal' => 17600,
                'jumlah' => 45,
                'total' => 825750,
            ],
            [
                'nama' => 'GG Signatur',
                'category_id' => 3,
                'modal' => 17600,
                'harga_jual_minim' => 17600,
                'harga_jual_sedang' => 17600,
                'harga_jual_mahal' => 17600,
                'jumlah' => 45,
                'total' => 825750,
            ],
            [
                'nama' => 'GG Signatur MILD 12',
                'category_id' => 1,
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
