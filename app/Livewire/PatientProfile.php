<?php

namespace App\Livewire;

use App\Models\Patient;
use Livewire\Component;

class PatientProfile extends Component
{
    public $name;
    public $address;
    public $phone;
    public $gender;
    public $dob;
    public $email;

    public function mount(){
        $patient = Patient::where('email',session('email'))->first();
        $this->name = $patient['name']; 
        $this->phone = $patient['phone']; 
        $this->gender = $patient['gender']; 
        $this->address = $patient['address']; 
        $this->dob = $patient['dob']; 
    }
    public function render()
    {
        return view('livewire.patient-profile');
    }

    public function save(){
        $this->validate([
            'name' => 'required',
            'address'=>'required',
            'phone'=>'required',
            'gender'=>'required',
            'dob'=>'required',
        ]);
        Patient::where('email',session('email'))->update([
            'name'=>$this->name,
            // 'email'=>session('email'),
            'address'=>$this->address,
            'phone'=>$this->phone,
            'gender'=>$this->gender,
            'dob'=>$this->dob
        ]);
        session()->put([
            'name'=>$this->name,
            ]);
        session()->flash('status', '! Profile informations are updated successfully.');
        return $this->redirect('/patient/profile', navigate: true);
    }
}
