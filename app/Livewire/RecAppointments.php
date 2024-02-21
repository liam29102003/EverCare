<?php

namespace App\Livewire;

use App\Models\Schedule;
use Livewire\Component;

class RecAppointments extends Component
{
    public $doctor_id = "";
    public $time = "";
    public $type = "";
    // public function mount()
    // {
    //     $this->date = date("Y-m-d");
    // }
    public function render()
    {
        return view('livewire.rec-appointments')->with(['appointments'=> \App\Models\Appointment::where('doctor_id', 'like', '%' . $this->doctor_id . '%')->where('appointment_date','like', '%' . $this->time . '%')->where('treatment_type','like', '%' . $this->type . '%')->get(), 'doctors'=> \App\Models\Doctor::all(),'schedules'=>Schedule::where('doctor_id',$this->doctor_id)->get()]);
    }
}
