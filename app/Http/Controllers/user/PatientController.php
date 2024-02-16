<?php

namespace App\Http\Controllers\user;

use App\Models\Doctor;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PatientController extends Controller
{
    public function index()
    {
        return view('user.doctor');
    }
    public function docDetail(Doctor $doctor)
    {
        // dd($doctor);
        return view('user.docDetail',['doctor'=>$doctor]);
    }
    public function blogList()
    {
        return view('user.blog');
    }
    public function blogDetail()
    {
        return view('user.blogDetail');
    }
    public function addDoctor(Request $request)
    {
        dd($request->all());
    }
    public function admin()
    {
        return view('admin.doctor_create');
    }

    public function dashboard(){
        return view('patient.dashboard');
    }

    public function makeAppointment(){
        return view('patient.appointmentForm');
    }
    
}
