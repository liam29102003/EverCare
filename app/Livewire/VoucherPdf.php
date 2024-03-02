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
        // dd(url()->previous());
        // if(request()->segment(1) === "admin"){
        $url = url()->previous();

// Parse the URL to extract the path
        $path = parse_url($url, PHP_URL_PATH);

// Explode the path by "/" and get the segment at index 2 (zero-indexed)
        $segments = explode('/', $path);

// Get the admin segment
$segment = $segments[1];
if($segment == 'admin')
{
    return $this->redirect(route('finance.income.list'));
}
if($segment == 'receptionist')
{   
    return $this->redirect(route('receptionist.prescription.list'));
}
    }   
    public function render()
    {
        return view('livewire.voucher-pdf');
    }
}
