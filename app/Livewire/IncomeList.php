<?php

namespace App\Livewire;

use App\Models\Voucher;
use Livewire\Component;
use App\Models\Appointment;
use Illuminate\Support\Facades\DB;

class IncomeList extends Component
{
    // public $records;
   
    public function render()
    {
        $incomeForToday = Appointment::select('*', DB::raw('SUM(price) as total_income'))
        ->where('status','approved')->where('treatment_type','online')
        ->groupBy('appointment_date')
        ->get();

        $records = Voucher::groupBy('medical_record_id')
        ->selectRaw('medical_record_id, updated_at, sum(amount) as total_price')
        ->paginate(6);
        return view('livewire.income-list')->with(['records'=>$records,'incomeForToday'=>$incomeForToday]);
    }
}
