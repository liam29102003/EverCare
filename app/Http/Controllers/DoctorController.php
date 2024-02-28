<?php

namespace App\Http\Controllers;

use DateTime;
use Illuminate\Http\Request;
use App\Models\MedicalRecord;

class DoctorController extends Controller
{
    public function add()
    {
        return view('doctor.medicalRecord.add');
    }
    public function list()
    {
        return view('doctor.medicalRecord.list');
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
// dd($age);
        return view('doctor.medicalRecord.detail', compact('medicalRecord', 'age'));
    }

    
}
