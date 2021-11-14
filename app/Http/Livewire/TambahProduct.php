<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;
use RealRashid\SweetAlert\Facades\Alert;

class TambahProduct extends Component
{
    public $nama, $modal, $harga_jual_minim, $harga_jual_sedang, $harga_jual_mahal, $jumlah, $total;

    public function store(){
        $this->validate([
            'nama' => 'required',
            'modal' => 'required',
            'harga_jual_minim' => 'required',
            'harga_jual_sedang' => 'required',
            'harga_jual_mahal' => 'required',
            'jumlah' => 'required',
            'total' => 'required',
        ]);

        Product::create([
            'nama' => $this->nama,
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
        return view('livewire.tambah-product')->extends('app')->section('content');
    }
}
