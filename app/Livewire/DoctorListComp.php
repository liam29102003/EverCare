<?php

namespace App\Livewire;

use App\Models\Doctor;
use Livewire\Component;
use App\Models\Specialization;

class DoctorListComp extends Component
{

    public $special;
    public function render()
    {
        // $specialities = Doctor::select('speciality')->distinct()->pluck('speciality');
        $specialities = Specialization::all();
        if($this->special == ""){
            $doctors = Doctor::get();
        }else{
            $doctors = Doctor::where('speciality',$this->special)->get();
        }
        
        return view('livewire.doctor-list-comp')->with(['specialities' => $specialities,'doctors'=>$doctors,'special'=>$this->special]);
    }

    public function changeDoctor($s){
        $this->special = $s;
    }
}
