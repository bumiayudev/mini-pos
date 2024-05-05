<?php

namespace App\Livewire\Trans;

use App\Models\Transaction;
use Livewire\Component;
use Livewire\Attributes\Validate;

class CreateTrans extends Component
{
    #[Validate('required')] 
    public $id_barang = '';
    #[Validate('required')] 
    public $tgl = '';
    #[Validate('required|numeric')] 
    public $jml = '';

    public function save()
    {
        $this->validate();
        Transaction::create(
            $this->only(['tgl','id_barang','jml'])
        );
        session()->flash('status', 'Berhasil disimpan');
        return redirect('/trans');
    }

    public function render()
    {
      
        return view('livewire.trans.create-trans')
        ->layout('layouts.app');
    }
}
