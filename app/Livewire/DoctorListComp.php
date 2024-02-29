<?php

namespace App\Livewire;

use App\Models\Doctor;
use Livewire\Component;

class DoctorListComp extends Component
{

    public $special = 'radiology';
    public function render()
    {
        $specialities = Doctor::select('speciality')->distinct()->pluck('speciality');
        $doctors = Doctor::where('speciality',$this->special)->get();
        return view('livewire.doctor-list-comp')->with(['specialities' => $specialities,'doctors' => $doctors,'special'=>$this->special]);
    }

    public function changeDoctor($s){
        $this->special = $s;
    }
}
