<?php

namespace App\Livewire;

use Livewire\Component;

class AppointmentButtom extends Component
{
    public $appointment;
    public $show = false;
    public function mount($appointment)
    {
        $this->appointment = $appointment;
    }
    public function name()
    {
       
    }
    public function render()
    {
        return view('livewire.appointment-buttom');
    }
}
