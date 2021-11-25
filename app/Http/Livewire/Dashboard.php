<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;
use RealRashid\SweetAlert\Facades\Alert;

class Dashboard extends Component
{
    public $products = [];
    public $search;
    public $updateProduct= false;

    protected $listeners =[
        'closeModalUpdateProduct' => 'closeModal'
    ];

    public function render()
    {
        $this->products = Product::where('nama', 'LIKE', '%'.$this->search.'%')->latest()->get();
        return view('livewire.dashboard')->extends('app')->section('content');
    }

    public function getProduct($id){
        $this->updateProduct = true;
        $product= Product::find($id);
        $this->emit('getProduct', $product);
    }

    public function closeModal(){
        $this->updateProduct = false;
    }

    public function destroy($id){
        Product::find($id)->delete();
        Alert::toast('Dagangan Dihapus', 'success');
        return redirect()->route('dashboard');
    }
}
