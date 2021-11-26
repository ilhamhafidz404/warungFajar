<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::insert([
            [
                'nama' => 'Rokok',
                'color' => 'lightskyblue',
                'icon' => 'smoking'
            ],
            [
                'nama' => 'Snack',
                'color' => 'salmon',
                'icon' => 'popcorn'
            ],
            [
                'nama' => 'Makanan',
                'color' => '#d5b3ff',
                'icon' => 'meat'
            ],
            [
                'nama' => 'Minuman',
                'color' => 'lightgreen',
                'icon' => 'cocktail'
            ],
            [
                'nama' => 'Alat Tulis',
                'color' => '#ff7900',
                'icon' => 'pencil-ruler'
            ],
            [
                'nama' => 'Obat-obatan',
                'color' => '#ef476f',
                'icon' => 'medkit'
            ],
            [
                'nama' => 'Peralatan Kamar Mandi',
                'color' => '#a2d2ff',
                'icon' => 'toilet'
            ],
            [
                'nama' => 'Bumbu Masak',
                'color' => '#2a9d8f',
                'icon' => 'knife-kitchen'
            ],
            [
                'nama' => 'Kosmetik',
                'color' => '#ffd166',
                'icon' => 'laugh-beam'
            ],
            [
                'nama' => 'Lainnya',
                'color' => '#118ab2',
                'icon' => 'layer-plus'
            ],
        ]);
    }
}
