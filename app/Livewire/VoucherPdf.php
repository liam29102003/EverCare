<?php

namespace App\Livewire;

use Dompdf\Dompdf;
use App\Models\Voucher;
use Livewire\Component;

class VoucherPdf extends Component
{
    
    public $id;
    public $total =0;
    public $vouchers;
    public function mount($ids,$vouchers)
    {
        $this->vouchers = $vouchers;
        $this->id = $ids;
        foreach($vouchers as $v)
        {
            $this->total+= $v['amount'];

        }
        // dd($this->total);
    }
    public function back()
    {
        return redirect()->back();
    }
    public function render()
    {
        return view('livewire.voucher-pdf');
    }
}
