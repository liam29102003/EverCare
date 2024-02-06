<?php

namespace App\Livewire;

use Livewire\Component;

class ExpenseEdit extends Component
{
    public $name;
    public $amount;
    public $expense;
    public function mount($expense)
    {
        $this->expense = $expense;
        $this->name = $expense->name;
        $this->amount = $expense->amount;
    }
    public function save()
    {
        $this->validate([
            'name' =>'required',
            'amount' =>'required',
        ]);
        $this->expense->name = $this->name;
        $this->expense->amount = $this->amount;
        $this->expense->save();
        session()->flash('status', 'Expense updated successfully');
        $this->name = '';
        $this->amount = '';
        return $this->redirect('/admin/finance/expense/list',navigate:true);
    }
    public function render()
    {
        return view('livewire.expense-edit');
    }
}
