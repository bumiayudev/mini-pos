<?php

namespace App\Livewire\Products;

use App\Models\Product;
use Livewire\Component;
use Livewire\Attributes\Validate;

class EditProduct extends Component
{
    public $product;

    #[Validate('required')] 
    public $nama = '';
    #[Validate('required')] 
    public $jenis = '';
    #[Validate('required|numeric')] 
    public $stok = '';

    public function mount($id)
    {
        $this->product = Product::findOrFail($id);
        $this->nama = $this->product->nama;
        $this->jenis = $this->product->jenis;
        $this->stok = $this->product->stok;
    }

    public function update()
    {
        $this->validate();

        $this->product->nama = $this->nama;
        $this->product->jenis = $this->jenis;
        $this->product->stok = $this->stok;
        $this->product->save();
        return $this->redirect('/product');
    }

    public function render()
    {
        return view('livewire.products.edit-product')
        ->layout('layouts.app');
    }
}
