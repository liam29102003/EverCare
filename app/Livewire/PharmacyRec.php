<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Pharmacy;
use Livewire\Attributes\On;

class PharmacyRec extends Component
{
    public $count;
    public $tcount;

    public $search;
    public function mount()
    {
        $this->count = count(session('my_associative_array',[]));
    }
#[On('updateParent')]
    public function updateParentProperty($count)
    {
      
        $this->tcount = $count;
    }
    public function render()
    {
        $this->count = count(session('my_associative_array',[]));

        return view('livewire.pharmacy-rec')->with(
            'pharmacies',
            Pharmacy::orderBy('name', 'asc')
            ->where('name', 'like', '%'.$this->search.'%')
            ->paginate(8));
    }
}
