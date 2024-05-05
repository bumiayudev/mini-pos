<?php

namespace App\Livewire\Trans;

use App\Models\Transaction;
use Livewire\Attributes\Validate;
use Livewire\Component;

class EditTrans extends Component
{
    public $trans;
    #[Validate('required')] 
    public $id_barang = '';
    #[Validate('required')] 
    public $tgl = '';
    #[Validate('required|numeric')] 
    public $jml = '';
    public function mount($id)
    {
        $this->trans = Transaction::findOrFail($id);
        $this->id_barang = $this->trans->id_barang;
        $this->tgl = $this->trans->tgl;
        $this->jml = $this->trans->jml;
    }

    public function update()
    {
        $this->validate();
        $this->trans->tgl = $this->tgl;
        $this->trans->id_barang = $this->id_barang;
        $this->trans->jml = $this->jml;
        $this->trans->save();

        return redirect('/trans');
    }

    public function render()
    {
        return view('livewire.trans.edit-trans')
        ->layout('layouts.app');
    }
}
