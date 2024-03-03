<?php

namespace App\Http\Controllers;

use App\Models\Staff;
use App\Models\Doctor;
use App\Models\Contact;
use App\Models\Patient;
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
        $dCount = Doctor::count();
        $sCount = Staff::count();
        $pCount = Patient::count();
        $message = Contact::where('view',0)->count();
        return view('admin.dashboard')->with(['dcount'=> $dCount, 'scount'=>$sCount, 'pcount'=>$pCount,'message'=>$message]);
    }
}
