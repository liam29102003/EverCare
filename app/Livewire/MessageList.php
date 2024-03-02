<?php

namespace App\Livewire;

use App\Models\Contact;
use Livewire\Component;

class MessageList extends Component
{
    public $reason = "";

    public function render()
    {
        
        if($this->reason==''){
            $contacts = Contact::all();
        }else{
            $contacts = Contact::where('reason',$this->reason)->get();
        }
        return view('livewire.message-list')->with(['contacts'=>$contacts]);
    }
}
