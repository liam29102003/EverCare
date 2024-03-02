<?php

namespace App\Livewire;

use App\Models\Doctor;
use Livewire\Component;
use App\Models\Specialization;
use Illuminate\Support\Facades\Auth;
use Livewire\WithFileUploads;

class DoctorProfile extends Component
{
    use WithFileUploads;
    public $name;
    public $email;
    public $phone;
    public $exp;
    public $speciality;
    public $speciality_name;
    public $qualification;
    public $bio;
    public $oldImage;
    public $showUpdatePassword = false;
    public $image;
    public function mount(){
        $this->name = Auth::user()->name;
        $this->email = Auth::user()->email;
        $this->phone = Auth::user()->phone;
        $this->exp = Auth::user()->exp;
        $this->speciality = Specialization::where('id',Auth::user()->specialization_id)->first()->id;
        $this->speciality_name = Specialization::where('id',Auth::user()->specialization_id)->first()->name;
        $this->qualification = Auth::user()->qualification;
        $this->bio = Auth::user()->bio;
        $this->oldImage = Auth::user()->image;

    }
    public function updatePassword()
    {
        $this->showUpdatePassword = !$this->showUpdatePassword;
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
            'email'=>'required|email|unique:doctors,email,'.Auth::id(),
            'exp'=>'required',
            'phone'=>'required',
            'speciality'=>'required',
            'qualification'=>'required',
            'bio'=>'required',
        ]);
        if($this->image)
        $path = $this->image->store('images', 'public');
        else
        $path = $this->oldImage; 
        // dd($path);

        
        Doctor::where('id',Auth::user()->id)->update([
            'name'=>$this->name,
            'email'=>$this->email,
            'exp'=>$this->exp,
            'phone'=>$this->phone,
            // 'speciality'=>$this->speciality,
            'qualification'=>$this->qualification,
            'bio'=>$this->bio,
            'image'=>$path
        ]);
       
       
session()->flash('status',"Profile updated successfully");
        return $this->redirect('/doctor/profile',navigate:true);
    }
    
}
