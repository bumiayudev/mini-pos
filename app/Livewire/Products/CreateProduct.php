<?php

namespace App\Livewire\Products;

use App\Models\Product;
use Livewire\Attributes\Validate;
use Livewire\Component;

class CreateProduct extends Component
{
    #[Validate('required')] 
    public $nama = '';
    #[Validate('required')] 
    public $jenis = '';
    #[Validate('required|numeric')] 
    public $stok = '';

    public function save()
    {
        $this->validate();
        Product::create(
            $this->only(['nama', 'jenis', 'stok'])
        );

        session()->flash('status', 'Berhasil disimpan');
        return $this->redirect('/product');
    }
    public function render()
    {
        return view('livewire.products.create-product')
                ->layout('layouts.app');
    }
}
