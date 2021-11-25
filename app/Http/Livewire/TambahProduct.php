<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Product;
use Livewire\Component;
use RealRashid\SweetAlert\Facades\Alert;

class TambahProduct extends Component
{
    public $nama, $modal, $harga_jual_minim, $harga_jual_sedang, $harga_jual_mahal, $jumlah, $total;
    public $categories, $category_id;

    protected $rules= [
        'nama' => 'required',
        'category_id' => 'numeric|required',
        'modal' => 'numeric|required',
        'harga_jual_minim' => 'numeric|required',
        'harga_jual_sedang' => 'numeric|required',
        'harga_jual_mahal' => 'numeric|required',
        'jumlah' => 'numeric|required',
        'total' => 'numeric|required',
    ];

    public function store(){
        $this->validate();

        Product::create([
            'nama' => $this->nama,
            'category_id' => $this->category_id,
            'modal' => $this->modal,
            'harga_jual_minim' => $this->harga_jual_minim,
            'harga_jual_sedang' => $this->harga_jual_sedang,
            'harga_jual_mahal' => $this->harga_jual_mahal,
            'jumlah' => $this->jumlah,
            'total' => $this->total,
        ]);

        Alert::success('Berhasil Menambah Barang');
        return redirect()->route('dashboard');
    }

    public function render()
    {
        $this->categories= Category::all();
        return view('livewire.tambah-product')->extends('app')->section('content');
    }
}
