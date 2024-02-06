<?php

namespace App\Livewire;

use App\Models\Finance;
use Livewire\Component;

class AddExpense extends Component
{
    public $name;
    public $amount;
    public function save()
    {
        $this->validate([
            'name' =>'required',
            'amount' =>'required',
        ]);
        $expense = new Finance();
        $expense->name = $this->name;
        $expense->amount = $this->amount;
        $expense->save();
        session()->flash('status', 'Expense added successfully');
        $this->name = '';
        $this->amount = '';
        return $this->redirect('list',navigate:true);
    }
    public function render()
    {
        return view('livewire.add-expense');
    }
}
