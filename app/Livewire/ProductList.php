<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;

class ProductList extends Component
{
    public $search = '';

    use WithPagination;
    public function render()
    {
        $products = Product::where('nama', 'like', "%{$this->search}%")
                    ->orWhere('jenis', 'like', "%{$this->search}%")
                    ->paginate(10);
        return view('livewire.product-list', [
            'products' => $products
        ])
         ->layout('layouts.app');
    }

    public function destroy($id)
    {
        if ($id) {
            Product::findOrFail($id)->delete();
            return redirect('/product');
        }
    }
}
