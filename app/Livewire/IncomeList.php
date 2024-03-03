<?php

namespace App\Livewire;

use App\Models\Voucher;
use Livewire\Component;
use App\Models\Appointment;
use Illuminate\Support\Facades\DB;
use Livewire\WithPagination;

class IncomeList extends Component
{
    use WithPagination;
    // public $records;
   
    public function render()
    {
       

        $records = Voucher::groupBy('medical_record_id')
        ->selectRaw('medical_record_id, updated_at, sum(price) as total_price')
        ->paginate(6);
        return view('livewire.income-list')->with(['records'=>$records]);
    }
}
