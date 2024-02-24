<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Appointment;
use Carbon\Carbon;

class RecAppointmentList extends Component
{
    public $type;
    public function render()
    {
        $currentDate = Carbon::now()->toDateString();
        $threeDaysFromNow = Carbon::now()->addDays(3)->toDateString();

        return view('livewire.rec-appointment-list')
        ->with(['appointments'=>Appointment::where('treatment_type',$this->type)
        ->whereDate('appointment_date', '>=', $currentDate)
        ->whereDate('appointment_date', '<=', $threeDaysFromNow)
        ->get()]);
    }
}
