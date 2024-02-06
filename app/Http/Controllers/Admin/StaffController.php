<?php

namespace App\Http\Controllers\Admin;

use App\Models\Staff;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class StaffController extends Controller
{
    public function index()
    {
        return view('admin.staff.index');
    }
    public function edit(Staff $staff)
    {
       return view('admin.staff.edit',compact('staff')) ;
    }
    public function details(Staff $staff)
    {
        return view('admin.staff.details',compact('staff')) ;

    }
    public function add()
    {
        return view('admin.staff.add');
    }
}
