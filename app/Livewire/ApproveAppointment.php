<?php

namespace App\Livewire;

use App\Models\Doctor;
use Livewire\Component;
use App\Models\Appointment;

class ApproveAppointment extends Component
{
    public function render()
    {
        return view('livewire.approve-appointment')->with([
            'appointments'=>Appointment::select('appointments.*','patients.name as name','patients.phone','patients.email')
            ->join('patients','patients.id','appointments.patient_id')
            ->where('status','sent')->paginate(10)
        ]);
    }

    // public function approve($id){
    //     $appointment = Appointment::where('id',$id)->first();
    //     $doctor = Doctor::where('id',$appointment->doctor_id)->first();
    //     Mail::to($email)->send(new ApproveMail($appointment->appointment_date,$appointment->appointment_day,$doctor->name));

    //     Appointment::where('id',$id)->update([
    //       'status' => 'approved'
    //     ]);
    //     return back()->with(['success'=>"Approve success."]);  
    // }
}
