<?php

namespace App\Livewire;

use App\Models\Transaction;
use Livewire\Component;

class TransList extends Component
{
    public $transactions;
    public function mount()
    {
        $this->transactions = Transaction::join('products', 'transactions.id_barang', '=', 'products.id')
        ->select('transactions.*', 'products.nama', 'products.jenis', 'products.stok')
        ->get();
    }
    
    public function render()
    {
        return view('livewire.trans-list')
        ->layout('layouts.app');
    }

    public function destroy($id){
        if($id){
            Transaction::findOrFail($id)->delete();
            return redirect('/trans');
        }
    }
}
