<?php

namespace App\Http\Controllers\Admin;

use App\Models\Finance;
use App\Models\Voucher;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FinanceController extends Controller
{
    public function expenseList()
    {
        return view('admin.finance.expenseList');
    }
    public function incomeList()
    {
        return view('admin.finance.incomeList');
    }
    public function expenseAdd()
    {
        return view('admin.finance.expenseAdd');
    }
    public function voucher($id)
    {
        return view('voucher')->with(['voucher'=>Voucher::where('medical_record_id',$id)->get(),'id'=>$id]);
    }
    public function edit(Finance $expense)
    {
        return view('admin.finance.expenseEdit',compact('expense'));
    }
}
