<?php

namespace App\Livewire;

use Carbon\Carbon;
use Livewire\Component;
use App\Models\Prescription;

class PrescriptionList extends Component
{
    public function render()
    {
        return view('livewire.prescription-list')->with('prescriptions', Prescription::where('status',1)->whereDate('created_at',Carbon::today())->get());
    }
}
