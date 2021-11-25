<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;

class TableList extends Component
{
    public $products;
    public function render()
    {
        $this->products= Product::all();
        return view('livewire.table-list')->extends('app')->section('content');
    }
}
