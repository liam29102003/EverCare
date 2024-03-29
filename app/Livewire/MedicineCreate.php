<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Pharmacy;
use Livewire\WithFileUploads;
use Livewire\Attributes\Validate;
use Illuminate\Support\Facades\Hash;

class MedicineCreate extends Component
{
    use WithFileUploads;
    #[Validate('required')]

    public $name;
    #[Validate('required')]

    public $price;
    #[Validate('required')]

    public $quantity;
    #[Validate('required|image|mimes:jpeg,png,jpg,gif|max:2048')]


    public $image;
    #[Validate('required')]

    public $description;
    #[Validate('required')]

    public $manufacturer;
    #[Validate('required')]

    public $side;
    public function  save()

    {

        $validated = $this->validate();
        $path = $this->image->store('images', 'public');
        // dd($path);

        Pharmacy::create(
            [
                'name' => $this->name,
                'price' => $this->price,
                'quantity' => $this->quantity,
                'description' => $this->description,
                'manufacturer' => $this->manufacturer,
                'side' => $this->side,

                'image' => $path,

                'created_at' => now(),
                'updated_at' => now(),


            ]
        );
        session()->flash('status', 'Pharmacy successfully added.');

        $this->reset();
        return $this->redirect('/admin/pharmacy/list',navigate:true);
    }
    public function render()
    {
        return view('livewire.medicine-create');
    }
}
