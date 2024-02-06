<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Schedule;

class ScheduleList extends Component
{
    public $doctor_id;
    public $open;
    public function mount($doctor_id)
    {
        $this->doctor_id = $doctor_id;
    }
    public function delete($id)
    {
        Schedule::where('id',$id)->delete();
        session()->flash('status', 'Schedule successfully deleted.');
        
        return $this->redirect('/admin/doctor/details/'.$this->doctor_id,navigate:true);    }
    public function render()
    {
        return view('livewire.schedule-list')->with('schedules',Schedule::where('doctor_id',$this->doctor_id)->get());
    }
}
