<?php

namespace App\Http\Controllers\Admin;

use App\Models\Finance;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FinanceController extends Controller
{
    public function expenseList()
    {
        return view('admin.finance.expenseList');
    }
    public function expenseAdd()
    {
        return view('admin.finance.expenseAdd');
    }
    public function edit(Finance $expense)
    {
        return view('admin.finance.expenseEdit',compact('expense'));
    }
}
