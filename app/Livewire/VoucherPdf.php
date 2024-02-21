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
        $url = "http://127.0.0.1:8000/admin/finance/voucher/1";

// Parse the URL to extract the path
$path = parse_url($url, PHP_URL_PATH);

// Explode the path by "/" and get the segment at index 2 (zero-indexed)
$segments = explode('/', $path);

// Get the admin segment
$adminSegment = $segments[1];
if($adminSegment == 'admin')
{
    return $this->redirect(route('finance.income.list'));
}
    }   
    public function render()
    {
        return view('livewire.voucher-pdf');
    }
}
