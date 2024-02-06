<?php

namespace App\Http\Controllers\Admin;

use App\Models\Pharmacy;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PharmacyController extends Controller
{   
    public function index()
    {
        return view('admin.pharmacy.list');
    }
    public function details(Pharmacy $pharmacy)
    { 
        return view('admin.pharmacy.details',compact('pharmacy'));
    }
    public function add()
    {
        return view('admin.pharmacy.add');
    }
    public function edit(Pharmacy $pharmacy)
    {
        return view('admin.pharmacy.edit',compact('pharmacy'));
    }
}
