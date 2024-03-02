<?php

namespace App\Livewire;

use App\Models\Contact;
use Livewire\Component;

class ViewCount extends Component
{
    public function render()
    {
        return view('livewire.view-count')->with('count',Contact::where('view',0)->count());
    }
}
