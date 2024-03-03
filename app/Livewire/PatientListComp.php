<?php

namespace App\Livewire;

use App\Models\Patient;
use Livewire\Component;
use Livewire\WithPagination;

class PatientListComp extends Component
{
    use WithPagination;

    public function render()
    {
        $patients = Patient::paginate(5);
        return view('livewire.patient-list-comp')->with('patients', $patients);
    }
}
