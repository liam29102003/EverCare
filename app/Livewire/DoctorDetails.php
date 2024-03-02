<?php

namespace App\Livewire;

use App\Models\Doctor;
use Livewire\Component;
use App\Models\Schedule;
use Livewire\Attributes\Validate;

class DoctorDetails extends Component
{
    public $id;
    public $doctor_id;
    #[Validate('required')]

    public $day;
    #[Validate('required|min:3')]

    public $to;
    #[Validate('required|min:3')]

    public $from;
    public $text="Add";
   public function mount($doctor_id)
    {
        
        $this->doctor_id = $doctor_id;
    }
    public function change()
    {
        $this->text = "Add";
    }
    public function store()
    {
        $this->validate();
        $schedule = new Schedule();
        $schedule->day = $this->day;
        $schedule->to = $this->to;
        $schedule->from = $this->from;
        $schedule->doctor_id = $this->doctor_id;
        $schedule->save();
        session()->flash('status', 'Schedule successfully added.');
        
    }
    public function updateSchedule($id)
    {
        $schedule = Schedule::where('id',$id)->first();
        $schedule->day = $this->day;
        $schedule->to = $this->to;
        $schedule->from = $this->from;
        $schedule->save();
        session()->flash('status', 'Schedule successfully updated.');
        $this->text = "Add";
    }
    
    public function delete($id)
    {
        Schedule::where('id',$id)->delete();
        session()->flash('status', 'Schedule successfully deleted.');
        
    }    
    public function edit($id)
    {
        $schedule = Schedule::where('id',$id)->first();
        $this->day = $schedule->day;
        $this->to = $schedule->to;
        $this->from = $schedule->from;
        $this->text = "edit";
        $this->id = $id;
    }
    public function render()
    {
        $doctor =Doctor::where('id',$this->doctor_id)->first();
        $schedules = Schedule::where('doctor_id',$this->doctor_id)->get();
        return view('livewire.doctor-details')->with(compact('doctor','schedules'));
    }
}
