<?php

namespace App\Livewire;

use Carbon\Carbon;
use App\Models\Doctor;
use Livewire\Component;
use App\Models\Appointment;
use Illuminate\Support\Facades\Hash;

class OldAppointment extends Component
{
    public $doctors;
    public $doctor;
    public $name;
    public $email;
    public $dob;
    public $treatment_type;
    public $appointment_day;
    public $description;
    public $appointments;
    public $status='pending';
    
    public function mount(){
        $this->doctors = Doctor::all();
        if ($this->doctor == null) {
            $this->appointments = [];
        } else {
            $this->appointments = \App\Models\Schedule::where('doctor_id', $this->doctor)->get()->toArray();
        }
    }

    public function changeDoctor($value)
    {
        $this->doctor = $value;
        if ($this->doctor == null) {
            $this->appointments = [];
        } else {
            $this->appointments = \App\Models\Schedule::where('doctor_id', $this->doctor)->get()->toArray();
        }
    }

    public function save()
    {
        if($this->treatment_type == 'in person'){
            $this->status = 'approved';
        }
        $this->validate([
            'treatment_type' => 'required',
            'doctor' => 'required',
            'appointment_day' => 'required',
        ]);
        $selectedDay = substr($this->appointment_day,strrpos($this->appointment_day, '| ') + 2);
        $currentDate = Carbon::now();
        $selectedDayIndex = Carbon::parse('next ' . ucfirst($selectedDay))->dayOfWeek;
        if($selectedDayIndex - $currentDate->dayOfWeek == 0){
            $dayDifference = ($selectedDayIndex - $currentDate->dayOfWeek + 7) % 7 + 7;
        }else{
            $dayDifference = ($selectedDayIndex - $currentDate->dayOfWeek + 7) % 7;
        }
        $nearestDate = $currentDate->addDays($dayDifference)->toDateString();
        // dd($nearestDate); // Output the nearest date of the selected day


        $status = Appointment::create([
            'patient_type'=>'old',
            'name' => session('name'),
            'treatment_type' => $this->treatment_type,
            'email' => session('email'),
            'doctor_id' => $this->doctor,
            'appointment_day' => $this->appointment_day,
            'appointment_date' => $nearestDate,
            'status'=>$this->status,
            'password'=>Hash::make(session('password')),
            'dob'=>session('dob'),
            'phone'=>session('phone'),
            'gender'=>session('gender'),
            'address'=>session('address'),
        ]);

        if ($status) {
            session()->put([
                'type' => $this->treatment_type,
                'name' => session('name'),
                'email' => session('email'),
                'dob' => session('dob'),
                'gender' => session('gender'),
                'phone' => session('phone'),
                'address' => session('address'),
                'appointment_day' => $this->appointment_day,
                'doctor_id' => $this->doctor,
                'appointment_date' => $nearestDate,
            ]);
            return $this->redirect('/instructions', navigate: true);
        };
        
    }

    public function render()
    {
        return view('livewire.old-appointment');
    }
}
