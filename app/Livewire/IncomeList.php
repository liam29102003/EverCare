<?php

namespace App\Livewire;

use App\Models\Voucher;
use Livewire\Component;

class IncomeList extends Component
{
    // public $records;
   
    public function render()
    {
        return view('livewire.income-list')->with('records',Voucher::groupBy('medical_record_id')
        ->selectRaw('medical_record_id, updated_at, sum(amount) as total_price')
        ->paginate(6)
        );
    }
}
