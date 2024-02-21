<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Appointment;
use Illuminate\Support\Facades\Hash;

class NewAppointment extends Component
{
    public $name;
    public $treatment_type;
    public $email;
    public $password;
    public $confirm_password;
    public $dob;
    public $address;
    public $phone;
    public $gender;
    public $description;
    public $doctor;
    public $appointment_date;
    public $doctors;
    public $appointments;

    public function mount()
    {
        $this->doctors = \App\Models\Doctor::all();
        if ($this->doctor == null) {
            $this->appointments = [];
        } else {
            $this->appointments = \App\Models\Schedule::where('doctor_id', $this->doctor)->get()->toArray();
        }
    }
    public function changeDoctor($value)
    {
        // dd("helo");
        // dd($value);
        $this->doctor = $value;
        if ($this->doctor == null) {
            $this->appointments = [];
        } else {
            $this->appointments = \App\Models\Schedule::where('doctor_id', $this->doctor)->get()->toArray();
        }
        // dd($appointment_date);
    }
    public function save()
    {
        $this->validate([
            'name' => 'required',
            'treatment_type' => 'required',
            'email' => 'required',
            'password' => 'required',
            'confirm_password' => 'required',
            'dob' => 'required',
            'address' => 'required',
            'phone' => 'required',
            'gender' => 'required',
            'description' => 'required',
            'doctor' => 'required',
            'appointment_date' => 'required',
        ]);
        $status = Appointment::create([
            'name' => $this->name,
            'treatment_type' => $this->treatment_type,
            'email' => $this->email,
            'password' => Hash::make($this->password),
            // 'confirm_password' => $this->confirm_password,
            'dob' => $this->dob,
            'address' => $this->address,
            'phone' => $this->phone,
            'gender' => $this->gender,
            'description' => $this->description,
            'doctor_id' => $this->doctor,
            'appointment_date' => $this->appointment_date,
        ]);
        if ($status) {
            session()->put([
                'type' => $this->treatment_type,
                'name' => $this->name,
                'email' => $this->email,
                'password' => Hash::make($this->password),
                'dob' => $this->dob,
                'gender' => $this->gender,
                'phone' => $this->phone,
                'address' => $this->address,
                'appointment_date' => $this->appointment_date,
                'doctor_id' => $this->doctor,
            ]);
            return $this->redirect(route('instructions'), navigate: true);
        };
    }

    public function render()
    {
        return view('livewire.new-appointment');
    }
}



