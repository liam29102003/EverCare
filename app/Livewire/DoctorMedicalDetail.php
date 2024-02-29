<?php

namespace App\Livewire;

use App\Models\Appointment;
use App\Models\Doctor;
use Livewire\Component;
use App\Models\MedicalRecord;
use App\Models\Specialization;

class DoctorMedicalDetail extends Component
{
    public $type;
    public $id;
    public $show = false;
    public $symptom;
    public $diet;
    public $note;
    public $disease;
    public $text = "Add Medical Record";
    public $next;
    public $doctor_name =[];

    public $specialization;

    public function mount($type, $id)
    {

        $this->type = $type;
        $this->id = $id;
    }
    public function name()
    {
        $this->show = !$this->show;
        if($this->show)
        {
            $this->text = "Close";
        }
        else{
            $this->text = "Add Medical Record";
        }
    }
    public function save()
    {
        // dd("Hello");
        $appointment = Appointment::find($this->id);
        $this->symptom = $appointment->symptoms;

        $medicalRecord =new MedicalRecord;
        $medicalRecord->patient_id = $appointment->patient_id;
        $medicalRecord->doctor_id = auth()->id();
        $medicalRecord->symptoms = $this->symptom;
        $medicalRecord->disease = $this->disease;
        $medicalRecord->diet = $this->diet;
        $medicalRecord->note = $this->note;
        $medicalRecord->next_doctor_id = $this->next;
        $medicalRecord->save();
        session()->flash('status', 'Medical Record added successfully');

        $this->redirect('/doctor/appointment/list',navigate:true);
    }
    public function updatedSpecialization()
    {
        // dd("Hello");
        if($this->specialization !== '')
        {
            $this->doctor_name = Doctor::where('specialization_id', $this->specialization)->get()->toArray();
        }
        
    }
    public function render()
    {
        $appointment = Appointment::find($this->id);
        // dd($appointment);
        return view('livewire.doctor-medical-detail')->with(['appointment'=>$appointment, 'symptom'=>$appointment->symptoms,'specializations'=>Specialization::all()]);
    }
}
