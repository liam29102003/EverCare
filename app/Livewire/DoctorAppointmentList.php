<?php

namespace App\Livewire;

use Carbon\Carbon;
use Livewire\Component;
use App\Models\Appointment;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Auth;

class DoctorAppointmentList extends Component
{
    use WithPagination;
    // #[Reactive]
    public $funName = "delete";
    public $text2 = '';
    //  #[Reactive]
    public $text = '';

    public $search = '';
    public $orderName = "created_at";
    public $type = "asc";
    public $date;
    public $typet="in person";
    public function mount()
    {
        // Get today's date
        $this->date =date('Y-m-d');
        
    } // Replace 'Asia/Yangon' with your desired timezone
    public function delete()
    {
        // dd($this->text2);
        $post = Appointment::find($this->text2);

        if ($post) {
            $post->delete();
        }
        session()->flash('status', 'Successfully deleted.');

        // You can add a confirmation message or redirect to another page if needed.
    }
    public function show()
    {
        dd($this->text2);
    }
    public function changevalue($id, $text)
    {
        $this->text = $text;

        $this->text2 = $id;
    }
    public function sorting($name)
    {

        $this->orderName = $name;
        $this->type = $this->type === "asc" ? "desc" : "asc";
    }
    public function changeType($type)
    {
        $this->typet = $type;
        
    }
    public function updatedSearch(): void
    {
        $this->gotoPage(1);
    }
   
    public function render()
    {
        return view('livewire.doctor-appointment-list')->with('appointments',Appointment::where('status','approved')->where('doctor_id',Auth::user()->id)->where('appointment_date',$this->date)->where('treatment_type',$this->typet)->orderBy('updated_at','asc')->paginate());
    }
}
