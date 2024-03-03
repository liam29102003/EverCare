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
    public $doctor = "0";
    public $name;
    public $email;
    public $dob;
    public $treatment_type="online";
    public $appointment_day;
    public $description;
    public $appointments;
    public $status='pending';
public $patient_id;
    
    public function mount(){
        $this->name = session('name');
        $this->email = session('email');
        $this->patient_id = session('id');
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
            $this->appointments = \App\Models\Schedule::where('doctor_id', $this->doctor)->where('type',$this->treatment_type)->get()->toArray();
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
            'patient_id'=>$this->patient_id,
            'treatment_type' => $this->treatment_type,
            'doctor_id' => $this->doctor,
            'appointment_day' => $this->appointment_day,
            'appointment_date' => $nearestDate,
            'status'=>$this->status,
            'description'=>$this->description,
        ]);

        if ($status) {
            session()->put([
                'type' => $this->treatment_type,
                'name' => $this->name,
                'email' => $this->email,
                'appointment_day' => $this->appointment_day,
                'doctor_id' => $this->doctor,
                'appointment_date' => $nearestDate,
            ]);
            return $this->redirect('/instructions', navigate: true);
        };
        
    }

    public function render()
    {
        $this->appointments = \App\Models\Schedule::where('doctor_id', $this->doctor)->where('type',$this->treatment_type)->get()->toArray();

        return view('livewire.old-appointment');
    }
}
