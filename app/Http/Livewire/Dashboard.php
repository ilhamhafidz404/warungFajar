<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;

class Dashboard extends Component
{
    public $products = [];
    public $search;
    public function render()
    {
        // if($this->search){
        //     $this->products = Product::where('nama', 'LIKE', '%'.$this->search.'%')->get();
        // } else{
        //     $this->products= [];
        // }
        $this->products = Product::where('nama', 'LIKE', '%'.$this->search.'%')->get();
        return view('livewire.dashboard')->extends('app')->section('content');
    }
}
