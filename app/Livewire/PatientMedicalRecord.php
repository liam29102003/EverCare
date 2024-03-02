<?php

namespace App\Livewire;

use App\Models\Patient;
use Livewire\Component;
use App\Models\MedicalRecord;
use Illuminate\Support\Facades\Auth;

class PatientMedicalRecord extends Component
{
    public function render()
    {
        $patient_id = Patient::select('id')->where('email',session('email'))->first()->id;

        // dd($patient_id);
        return view('livewire.patient-medical-record')->with('medicalRecords',MedicalRecord::where('patient_id', $patient_id)->paginate());;
    }
}
