<?php

namespace App\Livewire;

use App\Models\Patient;
use Livewire\Component;

class PatientListComp extends Component
{
    public function render()
    {
        $patients = Patient::paginate(5);
        return view('livewire.patient-list-comp')->with('patients', $patients);
    }
}
