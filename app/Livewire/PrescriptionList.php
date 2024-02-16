<?php

namespace App\Livewire;

use App\Models\MedicalRecord;
use Carbon\Carbon;
use Livewire\Component;
use App\Models\Prescription;

class PrescriptionList extends Component
{
    public function render()
    {
        // return view('livewire.prescription-list')->with('prescriptions', MedicalRecord::where('status',0)->whereDate('created_at',Carbon::today())->get());
        return view('livewire.prescription-list')->with('prescriptions', MedicalRecord::where('status',0)->get());

    }
}
