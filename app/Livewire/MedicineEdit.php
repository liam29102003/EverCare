<?php

namespace App\Livewire;

use App\Models\Pharmacy;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\Attributes\Validate;

class MedicineEdit extends Component
{

    use WithFileUploads;
    public $medicine;
    #[Validate('required|min:3')]

    public $name;
    #[Validate('required|min:3')]

    public $price;
    #[Validate('required|min:3')]

    public $quantity;
    #[Validate('required|min:3')]


    public $image;
    #[Validate('required|min:3')]

    public $description;
    #[Validate('required|min:3')]

    public $manufacturer;
    #[Validate('required|min:3')]

    public $side;
    public $oldImage ;
    public function mount($medicine)
    {
        $this->medicine = $medicine;
        $this->name = $medicine->name;
        $this->price = $medicine->price;
        $this->quantity = $medicine->quantity;
        // $this->image = $medicine->image;
        $this->description = $medicine->description;
        $this->manufacturer = $medicine->manufacturer;
        $this->side = $medicine->side;
        $this->oldImage = $medicine->image;

       
    }
    public function save(Pharmacy $m)
    {
        $m->name = $this->name;
        $m->price = $this->price;
        $m->quantity = $this->quantity;
        // $m->image = $this->image;
        $m->description = $this->description;
        $m->manufacturer = $this->manufacturer;
        $m->side = $this->side;
         
        if($this->image)
        $path = $this->image->store('images', 'public');
        else
        $path = $this->oldImage;         // dd($path);

        $m->image = $path;

        if($m->save()){
        session()->flash('status', 'Successfully updated.');
        return $this->redirect('/admin/pharmacy/list',navigate:true);
        }
        else{
            session()->flash('status', 'Fail to update.');
        }
    }
    public function render()
    {
        return view('livewire.medicine-edit');
    }
}
