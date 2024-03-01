<?php

namespace App\Livewire;

use App\Models\Contact;
use Livewire\Component;

class ContactForm extends Component
{
    public $name;
    public $reason;
    public $email;
    public $phone;
    public $message;
    public function render()
    {
        return view('livewire.contact-form');
    }

    public function sendMessage(){
        $this->validate([
            'name' => 'required',
            'reason'=>'required',
            'email' => 'required',
            'phone' => 'required',
            'message' => 'required'
        ]);

        Contact::create([
            'reason'=>$this->reason,
            'name'=>$this->name,
            'email'=>$this->email,
            'phone'=>$this->phone,
            'message'=>$this->message,
        ]);
        session()->flash('status', 'Message sent successfully.');
        return back();
    }
}
