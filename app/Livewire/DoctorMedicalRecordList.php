<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\MedicalRecord;

class DoctorMedicalRecordList extends Component
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
    public $id = "";
    public function mount($patientid)
    {
        $this->id = $patientid;
    }
    public function delete()
    {
        // dd($this->text2);
        $post = MedicalRecord::find($this->text2);

        if ($post) {
            $post->delete();
        }
        session()->flash('status', 'Successfully deletedd.');

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
    public function updatedSearch(): void
    {
        $this->gotoPage(1);
    }
    public function render()
    {
        $medicals = MedicalRecord::whereHas('patient', function ($query)  {
            $query->where('name', 'like', '%' . $this->search . '%')->where('doctor_id', 5)->where('patient_id', 'like', '%' . $this->id . '%')->orderBy('updated_at','asc');
        })->paginate(10);
        return view('livewire.doctor-medical-record-list')->with('medicals',$medicals);
    }
}


