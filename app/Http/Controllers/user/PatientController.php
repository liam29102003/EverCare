<?php

namespace App\Http\Controllers\user;

use DateTime;
use App\Models\Doctor;
use App\Models\Patient;
use App\Models\Prescription;
use Illuminate\Http\Request;
use App\Models\MedicalRecord;
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
        return redirect()->route('home');
    }

    public function loginPatient(Request $request){
        Validator::make($request->all(),[
            'email'=>'required|email',
            'password'=>'required',
        ])->validate();
        $patient = Patient::where('email', $request->email)->first();
        if (!$patient || !Hash::check($request->password, $patient->password)) {
            return back()->with(['email' => 'Invalid email or password']);
        }

        session()->put([
            'id'=>$patient->id,
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

    public function profile(){
        return view('user.profile');
    }
    
    public function contactPage(){
        return view('user.contact_page');
    }

    public function reviewPage(){
        return view('user.review');
    }
    public function medicalRecords()
    {
        return view('user.medicalRecord');;
    }
    public function medicalRecordDetail(MedicalRecord $medicalRecord)
    {
        $dob = $medicalRecord->patient->dob;
        $d = $medicalRecord->created_at;
        $birthDate = new DateTime($dob);
        // Get the current date
        $currentDate = new DateTime($d);
        // Calculate the difference between the current date and the date of birth
        $age = $currentDate->diff($birthDate)->y;
        $prescription = Prescription::where('medical_record_id', $medicalRecord->id)->get();
        // dd($age);
        return view('user.medicalRecordDetail', compact('medicalRecord', 'age','prescription'));
    }


    public function patientList(){
        return view('admin.patient_list');
    }
}
