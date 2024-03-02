<?php

namespace App\Livewire;

use App\Models\Doctor;
use Livewire\Component;
use App\Models\Specialization;
use Illuminate\Support\Facades\Auth;

class DoctorProfile extends Component
{
    public $name;
    public $email;
    public $phone;
    public $exp;
    public $speciality;
    public $speciality_name;
    public $qualification;
    public $bio;
    public function mount(){
        $this->name = Auth::user()->name;
        $this->email = Auth::user()->email;
        $this->phone = Auth::user()->phone;
        $this->exp = Auth::user()->exp;
        $this->speciality = Specialization::where('id',Auth::user()->speciality)->first()->id;
        $this->speciality_name = Specialization::where('id',Auth::user()->speciality)->first()->name;
        $this->qualification = Auth::user()->qualification;
        $this->bio = Auth::user()->bio;
    }

    public function render()
    {
        return view('livewire.doctor-profile')->with([
            'specialities' => Specialization::get(),
        ]);
    }

    public function saveProfile(){
        $this->validate([
            'name'=>'required',
            'email'=>'required',
            'exp'=>'required',
            'phone'=>'required',
            'speciality'=>'required',
            'qualification'=>'required',
            'bio'=>'required',
        ]);

        Doctor::where('email',$this->email)->update([
            'name'=>$this->name,
            'email'=>$this->email,
            'exp'=>$this->exp,
            'phone'=>$this->phone,
            'speciality'=>$this->speciality,
            'qualification'=>$this->qualification,
            'bio'=>$this->bio,
        ]);
session()->flash('status',"Profile updated successfully");
        return $this->redirect('/doctor/profilePage',navigate:true);
    }
    
}
