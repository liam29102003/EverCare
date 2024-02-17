<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Models\Patient;
use App\Models\Appointment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AppointmentController extends Controller
{
    public function appFormPage(){
        $doctors = Doctor::all();
        // dd($doctors->toArray());
        return view('user.appointment_form',compact('doctors'));
    }

    public function makeAppointment(Request $request){
        Validator::make($request->all(),[
            'name'=>'required',
            'email'=>'required|unique:appointments',
            'treatment_type'=>'required',
            'password'=>'required|min:5',
            'confirm_password'=>'required|same:password',
            'dob'=>'required',
            'phone'=>'required',
            'gender'=>'required',   
            'doctor'=>'required',
            'appointment_date'=>'required',
            'address'=>'required'
        ])->validate();
        $data = [
            'patient_type'=>'new',
            'name'=>$request->name,
            'email'=>$request->email,
            'treatment_type'=>$request->treatment_type,
            'password'=>Hash::make($request->password),
            'dob'=>$request->dob,
            'gender'=>$request->gender,
            'phone'=>$request->phone,
            'doctor_id'=>$request->doctor,
            'appointment_date'=>$request->appointment_date,
            'address'=>$request->address
        ];
        Appointment::create($data);
        Patient::create([
        'name'=>$request->name,
        'email'=>$request->email,
        'password'=>Hash::make($request->password),
        'dob'=>$request->dob,
        'gender'=>$request->gender,
        'phone'=>$request->phone,
        'address'=>$request->address
        ]);
        $doctor = Doctor::where('id',$request->doctor)->get();
        return view('user.successful_appointment',compact('data','doctor'));
    }
}
