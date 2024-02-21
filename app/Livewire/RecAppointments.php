<?php

namespace App\Livewire;

use Livewire\Component;

class RecAppointments extends Component
{
    public $doctor_id = "";
    public function render()
    {
        return view('livewire.rec-appointments')->with(['appointments'=> \App\Models\Appointment::where('doctor_id', 'like', '%' . $this->doctor_id . '%')->get(), 'doctors'=> \App\Models\Doctor::all()]);
    }
}
