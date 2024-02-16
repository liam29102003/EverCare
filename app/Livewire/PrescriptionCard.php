<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\On;
use App\Models\MedicalRecord;

class PrescriptionCard extends Component
{
    // public $id;
    public $myAssociativeArray = [];
    public $medicalRecordId;
    public function mount($medicalRecordId)
    {
        $this->medicalRecordId = $medicalRecordId;
    }
    public function delete()
    {
        session()->forget('my_associative_array');
    }

    public function render()
    {
        return view('livewire.prescription-card')->with('prescription', MedicalRecord::where('id',$this->medicalRecordId)->first());;
    }
}
