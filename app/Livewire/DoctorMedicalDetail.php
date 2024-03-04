<?php

namespace App\Livewire;

use App\Models\Doctor;
use Livewire\Component;
use App\Models\Pharmacy;
use App\Models\Permission;
use App\Models\Appointment;
use App\Models\MedicalRecord;
use App\Models\Prescription;
use App\Models\Specialization;
use Livewire\Attributes\Validate;

class DoctorMedicalDetail extends Component
{
    public $type;
    public $id;
    public $show = false;
    public $pshow = false;
    #[Validate('required')]

    public $symptom;

    public $diet;
    public $note;
    #[Validate('required')]

    public $disease;
    public $text = "Add Medical Record";
    public $text2 = "Add Prexcription";

    public $next = "";

    public $doctor_name =[];
    #[Validate('required')]

    public $search = "";
    #[Validate('required')]

    public $dosage;
    #[Validate('required')]

    public $frequency;
    #[Validate('required')]

    public $duration;
    // public $pnote;
    public $temp = [];
    public $m_name = "";
    // public $fdoctor;

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
    public function pname()
    {
        $this->pshow = !$this->pshow;
        if($this->pshow)
        {
            $this->text2 = "Close";
        }
        else{
            $this->text2 = "Add Presecription";
        }
    }
    public function check()
    { 
        // dd('Hello');
        // $this->validate();
        $arrayT = [ 'name' =>  $this->search, 'dosage' => $this->dosage, 'frequency' => $this->frequency, 'duration' => $this->duration];
        array_push($this->temp, $arrayT);
        $this->reset('search','dosage','frequency','duration','m_name');
        // dd($this->temp);
    }
    public function delete($t)
    {
        unset($this->temp[$t]);
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
        $medicalRecord->treatment_type=$appointment->treatment_type;
        $medicalRecord->status = $appointment->treatment_type=='online'? 1 :0;
        $medicalRecord->save();
        if($this->next !== "")
        {
            if(Permission::where('patient_id', $appointment->patient_id)->where('doctor_id', $this->next)->exists()){
                session()->flash('status', 'Medical Record added successfully');
                $this->redirect('/doctor/appointment/list',navigate:true);
            }
            else{
            $permission = new Permission;
            $permission->patient_id = $appointment->patient_id;
            $permission->doctor_id = $this->next;
            $permission->save();
            }
        }
        
        foreach($this->temp as $p){
            // dd()
            $prescription = new Prescription;
            $prescription->medicine_name = $p['name'];
            $prescription->dosage = $p['dosage'];
            $prescription->frequency = $p['frequency'];
            $prescription->duration = $p['duration'];
            $prescription->medical_record_id = $medicalRecord->id;
            $prescription->save();
        }
        $appointment->status = "finished";
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
    public function click($result)
    {
        $this->search = $result;
        $this->m_name = $result;
    }
    public function render()
    {
        $appointment = Appointment::find($this->id);
        // dd($appointment);
        return view('livewire.doctor-medical-detail')->with(['appointment'=>$appointment, 'symptom'=>$appointment->symptoms,'specializations'=>Specialization::all(),'medicines'=>Pharmacy::where('quantity','>',0)->where('name', 'like', '%' . $this->search . '%')->get()]);
    }
}
