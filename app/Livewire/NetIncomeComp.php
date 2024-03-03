<?php

namespace App\Livewire;

use App\Models\Finance;
use App\Models\Voucher;
use Livewire\Component;
use App\Models\Appointment;
use Illuminate\Support\Facades\DB;

class NetIncomeComp extends Component
{
    public $reportData;
    
//     public function mount(){
//         $this->reportData = [];

//         $incomeData = Appointment::select(
//             DB::raw('YEAR(created_at) as year'),
//             DB::raw('MONTH(created_at) as month'),
//             DB::raw('SUM(price) as total_income')
//         )->where('status','approved')->where('treatment_type','online')
//         ->groupBy('year', 'month')
//         ->get();
// dd($incomeData->toArray());
//         $voucherData = Voucher::select(
//             DB::raw('YEAR(created_at) as year'),
//             DB::raw('MONTH(created_at) as month'),
//             DB::raw('SUM(price) as vincome')
//         )
//         ->groupBy('year', 'month')
//         ->get();

//         $expenseData = Finance::select(
//             DB::raw('YEAR(created_at) as year'),
//             DB::raw('MONTH(created_at) as month'),
//             DB::raw('SUM(amount) as total_expense')
//         )
//         ->groupBy('year', 'month')
//         ->get();

//         foreach ($incomeData as $income) {
//             $month = $income->year . '-' . $income->month;
//             $this->reportData[$month]['income'] = $income->total_income;
//         }

//         foreach ($expenseData as $expense) {
//             $month = $expense->year . '-' . $expense->month;
//             $this->reportData[$month]['expense'] = $expense->total_expense;
//         }

//         foreach ($this->reportData as &$data) {
//             $data['difference'] = $data['income'] - $data['expense'];
//         }

//     }
    public function render()
    {

        return view('livewire.net-income-comp');
    }
}
