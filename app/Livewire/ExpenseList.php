<?php

namespace App\Livewire;

use App\Models\Finance;
use Livewire\Component;
use App\Models\Appointment;
use Livewire\WithPagination;
use Illuminate\Support\Facades\DB;

class ExpenseList extends Component
{
    use  WithPagination;
    // #[Reactive]
    public $funName="delete";
     public $text2='';
    //  #[Reactive]
     public $text='';

    public $search='';
    public $orderName ="name";
     public $type = "asc";
     public function delete()
     {
         // dd($this->text2);
         $post = Finance::find($this->text2);
 
         if ($post) {
             $post->delete();
         }
         session()->flash('status', 'Successfully deletedd.');
 
         // You can add a confirmation message or redirect to another page if needed.
     }
    public function show()
    {
        dd($this->text2);
    }
    public function changevalue($id, $text)
    {
        $this->text = $text;

        $this->text2 = $id;
    }
    public function sorting($name)
    {
        
        $this->orderName = $name;
        $this->type=$this->type === "asc" ? "desc" : "asc";
    }
    public function render()
    {
        $incomeForToday = Appointment::select('*', DB::raw('SUM(price) as total_income'))
        ->where('status','approved')->where('treatment_type','online')
        ->groupBy('appointment_date')
        ->paginate(6);
        return view('livewire.expense-list')->with(
            'incomeForToday',
           $incomeForToday
        );;
    }
}
