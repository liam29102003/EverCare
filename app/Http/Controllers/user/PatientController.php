<?php

namespace App\Http\Controllers\user;

use App\Models\Doctor;
use App\Models\Patient;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

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

    public function logout(){
        session()->flush();
        return back();
    }

    public function loginPatient(Request $request){
        Validator::make($request->all(),[
            'email'=>'required',
            'password'=>'required',
        ])->validate();
        $patient = Patient::where('email', $request->email)->first();
        if (!$patient || !Hash::check($request->password, $patient->password)) {
            return back()->with(['email' => 'Invalid credentials']);
        }

        session()->put([
            'name'=>$patient->name,
            'email'=>$request->email,
            'password'=>Hash::make($request->password),
            'dob'=>$patient->dob,
            'gender'=>$patient->gender,
            'phone'=>$patient->phone,
            'address'=>$patient->address
            ]);
        
        return redirect()->route('home');
    }
    
}
