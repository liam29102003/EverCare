<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Appointment;

class ApproveAppointment extends Component
{
    public function render()
    {
        return view('livewire.approve-appointment')->with([
            'appointments'=>Appointment::where('status','sent')->paginate(10)
        ]);
    }

    public function approve($id){
        Appointment::where('id',$id)->update([
          'status' => 'approved'
        ]);
        return back()->with(['success'=>"Approve success."]);
    }
}
