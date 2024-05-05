<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Component;

class ProductList extends Component
{
    public $products;
    public function mount()
    {
        $this->products = Product::all();
    }

    public function render()
    {
        return view('livewire.product-list')
            ->layout('layouts.app');
    }

    public function destroy($id)
    {
        if($id){
            Product::findOrFail($id)->delete();
            return redirect('/product');
        }
    }
}
