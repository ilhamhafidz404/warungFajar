<?php

namespace App\Imports;

use App\Models\Product;
use Maatwebsite\Excel\Concerns\ToModel;

class ProductsImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Product([
            'nama'     => $row[0],
            'category_id'    => $row[1], 
            'modal' => $row[2],
            'harga_jual_minim' => $row[3],
            'harga_jual_sedang' => $row[4],
            'harga_jual_mahal' => $row[5],
            'jumlah' => $row[6],
            'total' => $row[7],
        ]);
    }
}
