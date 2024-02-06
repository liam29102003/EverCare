<?php

namespace App\Http\Controllers\admin;

use App\Models\Patient;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PatientController extends Controller
{
    public function details(Patient $patient)
    {
        return view('admin.staff.details',compact('patient')) ;

    }
    public function list()
    {
        return view('admin.patient.list');
    }

    
}
