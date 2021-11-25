<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Product;
use Livewire\Component;
use RealRashid\SweetAlert\Facades\Alert;

class UpdateProduct extends Component
{
    public $nama, $modal, $harga_jual_minim, $harga_jual_sedang, $harga_jual_mahal, $jumlah, $total;
    public $productId;
    public $categories, $category_id;

    protected $listeners =[
        'getProduct' => 'showProduct'
    ];

    public function render()
    {
        $this->categories= Category::all();
        return view('livewire.update-product')->extends('app')->section('content');
    }

    public function showProduct($product){
        $this->nama                 = $product['nama'];
        $this->modal                = $product['modal'];
        $this->harga_jual_mahal     = $product['harga_jual_mahal'];
        $this->harga_jual_minim     = $product['harga_jual_minim'];
        $this->harga_jual_sedang    = $product['harga_jual_sedang'];
        $this->jumlah               = $product['jumlah'];
        $this->total                = $product['total'];
        $this->productId            = $product['id'];
        $this->category_id          = $product['category_id'];
    }

    public function closeModalUpdateProduct(){
        $this->emit('closeModalUpdateProduct');
    }

    public function update(){
        Product::find($this->productId)->update([
            "nama"                 => $this->nama,
            "category_id"          => $this->category_id,
            "modal"                => $this->modal, 
            "harga_jual_mahal"     => $this->harga_jual_mahal,
            "harga_jual_minim"     => $this->harga_jual_minim, 
            "harga_jual_sedang"    => $this->harga_jual_sedang, 
            "jumlah"               => $this->jumlah, 
            "total"                => $this->total,
        ]);

        Alert::success('Berhasil', 'Data barang terubah');
        return redirect()->route('dashboard');
    }
}
