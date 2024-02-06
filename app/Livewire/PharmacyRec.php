<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Pharmacy;

class PharmacyRec extends Component
{
    public $search;
    public function render()
    {
        return view('livewire.pharmacy-rec')->with(
            'pharmacies',
            Pharmacy::orderBy('name', 'asc')
            ->where('name', 'like', '%'.$this->search.'%')
            ->paginate(8));
    }
}
