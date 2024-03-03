<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Appointment;
use Livewire\WithFileUploads;

class UploadPaymentPhoto extends Component
{
    use WithFileUploads;
    public $id;
    public $image; 
    public $symptom;

    public function mount($id){
        $this->id = $id;
    }

    public function render()
    {
        $appointment = Appointment::where('id',$this->id)->get();
        session()->put([
            'type' => $appointment[0]->treatment_type,
            'name' => $appointment[0]->name,
            'email' => $appointment[0]->email,
            'dob' => $appointment[0]->dob,
            'gender' => $appointment[0]->gender,
            'phone' => $appointment[0]->phone,
            'address' => $appointment[0]->address,
            'appointment_day' => $appointment[0]->appointment_day,
        ]);
        return view('livewire.upload-payment-photo');
    }

    public function uploadImg(){
        $imageName = time().'.'.$this->image->extension();
        $this->image->storeAs('public/payment', $imageName);
        // You can store the image path in the database if needed
        Appointment::where('id',$this->id)->update(['image' => $imageName,'symptoms'=>$this->symptom]);

        session()->flash('message', 'Image uploaded successfully.');
        return back();
    }

}
