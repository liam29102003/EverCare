<?php

namespace App\Livewire;

use App\Models\Doctor;
use Livewire\Component;

class Instruction extends Component
{
    public function render()
    {
        $doctor = Doctor::where('id',session('doctor_id'))->get();
        return view('livewire.instruction')->with('doctor',$doctor);
    }
}
