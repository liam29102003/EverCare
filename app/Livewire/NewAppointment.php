<?php

namespace App\Livewire;

use Carbon\Carbon;
use App\Models\Patient;
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
    public $appointment_day;
    public $doctors;
    public $appointments;
    public $status='pending';
    
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
            'patient_type'=>'new',
            'name' => $this->name,
            'treatment_type' => $this->treatment_type,
            'email' => $this->email,
            'password' => Hash::make($this->password),
            'dob' => $this->dob,
            'address' => $this->address,
            'phone' => $this->phone,
            'gender' => $this->gender,
            'description' => $this->description,
            'doctor_id' => $this->doctor,
            'appointment_day' => $this->appointment_day,
            'appointment_date' => $nearestDate,
            'status'=>$this->status,
            
        ]);
        Patient::create([
            'name'=>$this->name,
            'email'=>$this->email,
            'password'=>Hash::make($this->password),
            'dob'=>$this->dob,
            'gender'=>$this->gender,
            'phone'=>$this->phone,
            'address'=>$this->address
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
                'appointment_day' => $this->appointment_day,
                'doctor_id' => $this->doctor,
                'appointment_date' => $nearestDate,
            ]);
            return $this->redirect(route('instructions'), navigate: true);
        };
    }

    public function render()
    {
        return view('livewire.new-appointment');
    }
}



