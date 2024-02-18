<?php

namespace App\Livewire;

use App\Models\Doctor;
use Livewire\Component;
use App\Models\Schedule;

class DynamicSchedule extends Component
{
    public $doctors;
    public $doctor;
    public $appointment_date;
    public $appointments;
    public function mount(){
        $this->doctors = Doctor::all();
        if($this->doctor==null){
            $this->appointments = [];
        }else{
            $this->appointments = Schedule::where('doctor_id',$this->doctor)->get()->toArray();
        }
    }

public function changeDoctor($value){
    // dd("helo");
    // dd($value);
    $this->doctor = $value;
    if($this->doctor==null){
        $this->appointments = [];
    }else{
        $this->appointments = Schedule::where('doctor_id',$this->doctor)->get()->toArray();
    }
    // dd($appointment_date);
}

    public function render()
    {
        return view('livewire.dynamic-schedule');
    }
}
