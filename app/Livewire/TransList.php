<?php

namespace App\Livewire;

use App\Models\Transaction;
use Livewire\Component;
use Livewire\WithPagination;

class TransList extends Component
{
    public $search = '';
    use WithPagination;
    

    public function render()
    {
        $transactions = Transaction::join('products', 'transactions.id_barang', '=', 'products.id')
        ->select('transactions.*', 'products.nama', 'products.jenis', 'products.stok')
        ->where('products.nama', 'like', "%{$this->search}%")
        ->orWhere('transactions.tgl', '=', "{$this->search}")
        ->paginate(10);

        return view('livewire.trans-list', [
            'transactions'=> $transactions
        ])
        ->layout('layouts.app');
    }

    public function destroy($id){
        if($id){
            Transaction::findOrFail($id)->delete();
            return redirect('/trans');
        }
    }
}
