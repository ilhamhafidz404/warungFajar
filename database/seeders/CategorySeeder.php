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
                'color' => 'aqua',
                'icon' => 'meat'
            ],
            [
                'nama' => 'Minuman',
                'color' => 'lightgreen',
                'icon' => 'cocktail'
            ]
        ]);
    }
}
