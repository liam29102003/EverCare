<?php

namespace App\Http\Controllers;

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
}
