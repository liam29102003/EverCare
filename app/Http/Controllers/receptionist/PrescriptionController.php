<?php

namespace App\Http\Controllers\receptionist;

use App\Models\Prescription;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Carbon\Carbon;

class PrescriptionController extends Controller
{
    public function list()
    {
        return view('receptionist.prescription.list')->with('prescriptions', Prescription::where('status',1)->whereDate('created_at',Carbon::today())->get());
    }
}
