<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Schedule;
use Livewire\Attributes\Validate;

class AddSchedule extends Component
{

    public $doctor_id;
    #[Validate('required')]

    public $day;
    #[Validate('required|min:3')]

    public $to;
    #[Validate('required|min:3')]

    public $from;
    public function mount($doctor_id)
    {
        $this->doctor_id = $doctor_id;
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
        
        return $this->redirect('/admin/doctor/details/'.$this->doctor_id,navigate:true);
    }
    public function render()
    {
        return view('livewire.add-schedule');
    }
}
