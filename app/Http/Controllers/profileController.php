<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Staff;
use App\Models\Doctor;
use App\Models\Contact;
use App\Models\Patient;
use App\Models\Voucher;
use App\Models\Appointment;
use Illuminate\Http\Request;

class profileController extends Controller
{
    public function adminProfile(){
        return view('admin.password');
    }

    public function docProfile(){
        return view('doctor.profile');
    }
    public function recProfile(){
        return view('receptionist.profile');
    }
    public function dashboard()
    {
        $currentMonth = Carbon::now()->month;
$currentYear = Carbon::now()->year;
        $online_income = Appointment::where('status','approved')->where('treatment_type','online')->whereYear('created_at', $currentYear)
        ->whereMonth('created_at', $currentMonth)->sum('price');
        $offline_income = Voucher::whereYear('created_at', $currentYear)
        ->whereMonth('created_at', $currentMonth)->sum('price');
        $total = $online_income + $offline_income;
        $dCount = Doctor::count();
        $sCount = Staff::count();
        $pCount = Patient::count();
        $message = Contact::where('view',0)->count();
        return view('admin.dashboard')->with(['dcount'=> $dCount, 'scount'=>$sCount, 'pcount'=>$pCount,'message'=>$message,'total'=>$total]);
    }
}
