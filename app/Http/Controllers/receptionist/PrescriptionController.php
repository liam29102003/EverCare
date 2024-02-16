<?php

namespace App\Http\Controllers\receptionist;

use App\Models\Prescription;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\MedicalRecord;
use App\Models\Voucher;
use Carbon\Carbon;

class PrescriptionController extends Controller
{
    public function list()
    {
        return view('receptionist.prescription.list')->with('prescriptions', Prescription::where('status',1)->whereDate('created_at',Carbon::today())->get());
    }
    public function detail($id)
    {
        return view('receptionist.prescription.detail')->with('medicalRecordId',$id);
    }
    public function voucher($id)
    {
        return view('voucher')->with('vouchers',Voucher::where('medical_record_id',$id)->get());
    }
}
