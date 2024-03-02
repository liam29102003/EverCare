<?php

namespace App\Livewire;

use App\Models\Contact;
use Livewire\Component;

class MessageList extends Component
{
    public $reason = "";
    public function message(Contact $message)
    {
        // $message = new Contact();
        $message->view =1;
        $message->save();
        return $this->redirect(route('contact.detail',['id'=>$message->id]));
    }
    public function render()
    {
        
        if($this->reason==''){
            $contacts = Contact::orderBy('view','asc')->get();
        }else{
            $contacts = Contact::where('reason',$this->reason)->orderBy('view','asc')->get();
        }
        return view('livewire.message-list')->with(['contacts'=>$contacts]);
    }
}
