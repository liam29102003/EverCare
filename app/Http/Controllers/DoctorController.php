<?php

namespace App\Http\Controllers;

use DateTime;
use App\Models\Appointment;
use Illuminate\Http\Request;
use App\Models\MedicalRecord;
use App\Models\Prescription;
use Illuminate\Support\Facades\Auth;

class DoctorController extends Controller
{
    public function add()
    {
        return view('doctor.medicalRecord.add');
    }
    public function list($id = '')
    {

        return view('doctor.medicalRecord.list', compact('id'));
    }
    public function detail(MedicalRecord $medicalRecord)
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
        return view('doctor.medicalRecord.detail', compact('medicalRecord', 'age','prescription'));
    }
    public function listAppointment()
    {
        return view('doctor.appointment.list');
    }
    public function appointmentDetail($type, $id)
    {
        return view('doctor.appointment.detail')->with(['type' => $type, 'id' => $id, 'appointment' => Appointment::find($id)]);
    }
}
