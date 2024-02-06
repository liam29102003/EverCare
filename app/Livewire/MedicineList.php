<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Pharmacy;
use Livewire\WithPagination;

class MedicineList extends Component
{
    use WithPagination;
    // #[Reactive]
     public $text2='';
    //  #[Reactive]
     public $text='';
     public $search='';
     public $orderName ="name";
     public $type = "asc";
     public $medicine_id =[] ;
     public $selectAll =false;
     public $jump = 1;
    public $funName="medicineDeletedd";

     public function delete()
     {
         // dd($this->text2);
         $post = Pharmacy::find($this->text2);
 
         if ($post) {
             $post->delete();
         }
         session()->flash('status', 'Successfully deletedd.');
 
         // You can add a confirmation message or redirect to another page if needed.
     }
     
    //  public function toggle()
    //  {
    //     $this->selectAll = !($this->selectAll);
    //  }
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
   
    public function incrementQuantity()
    {
        foreach($this->medicine_id as $m)
        {

            Pharmacy::where('id', $m)->increment('quantity',$this->jump);
        }
    }
    public function decrementQuantity()
    {
        foreach($this->medicine_id as $m)
        {
            $medicine = Pharmacy::find($m);
            if($medicine && $medicine->quantity > $this->jump){
            $medicine->decrement('quantity',$this->jump);
            }
        }
    }
    public function updatedSelectAll($value)
    {
        $this->medicine_id = $value? Pharmacy::where('name', 'like', '%' . $this->search . '%')->pluck('id') : [];
    }
    public function render()
    {
        return view('livewire.medicine-list')->with(
            [
                'medicine' => Pharmacy::where('name', 'like', '%' . $this->search . '%')->orderBy($this->orderName,$this->type)->paginate(6)
            ]
        );
    }
}
