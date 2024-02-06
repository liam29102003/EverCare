<?php

namespace App\Livewire;

use App\Models\Patient;
use DateTime;
use Livewire\Component;
use Livewire\WithPagination;

class PatientList extends Component
{
     
    use  WithPagination;
    // #[Reactive]
    public $funName="delete";
     public $text2='';
    //  #[Reactive]
     public $text='';

    public $search='';
    public $orderName ="name";
     public $type = "asc";
     public function delete()
     {
         // dd($this->text2);
         $post = Patient::find($this->text2);
 
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
        $this->type=$this->type === "asc" ? "desc" : "asc";
    }
    
    public function render()
    {
        
        return view('livewire.patient-list')->with(
            'patients',
            Patient::orderBy($this->orderName, $this->type)
            ->where('name', 'like', '%'.$this->search.'%')
            ->paginate(6));
    }
}
