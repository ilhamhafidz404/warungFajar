<?php

namespace App\View\Components;

use App\Models\Product;
use Illuminate\View\Component;

class ReportCard extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $productModal, $productJumlah, $productTotal, $products;
    public function __construct($productModal, $productJumlah, $productTotal, $products)
    {
        $this->products= $products;
        $this->productModal= $productModal;
        $this->productJumlah= $productJumlah;
        $this->productTotal= $productTotal;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $productCount= Product::count();
        $modalCount= 0;
        return view('components.report-card', compact('productCount', 'modalCount'));
    }
}
