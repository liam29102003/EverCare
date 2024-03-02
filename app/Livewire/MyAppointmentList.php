<?php

namespace App\Livewire;

use App\Models\Patient;
use Livewire\Component;
use App\Models\Appointment;

class MyAppointmentList extends Component
{
    public function render()
    {
        $patient_id = Patient::select('id')->where('email',session('email'))->first()->id;
        $appointments = Appointment::select('appointments.*','doctors.name as dname','doctors.specialization_id as dspecial','specializations.name as special')
        ->join('doctors','doctors.id','appointments.doctor_id')
        ->join('specializations','specializations.id','doctors.specialization_id')
        ->where('patient_id',$patient_id)->orderby('appointment_date','desc')->paginate(5);
        return view('livewire.my-appointment-list')->with(['appointments' => $appointments]);
    }
}
