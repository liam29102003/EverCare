<?php

namespace App\Livewire;

use Livewire\Component;

class DynamicSchedule extends Component
{
    public $doctors;
    public function mount($doctors){
        $this->doctors = $doctors;
    }
    public function render()
    {
        return view('livewire.dynamic-schedule');
    }
}
