<?php

namespace App\Livewire;

use Livewire\Component;

class RecPharmacy extends Component
{
    public $pharmacy;
    public $cart = [];
    public $quantity = 0;
    public $id;
    public $myAssociativeArray=[];
    public $text="Add to Cart";
    public function mount($pharmacy)
    {

        $this->myAssociativeArray = session('my_associative_array', []);
        $this->id = $pharmacy->id;
        if (isset($this->myAssociativeArray[$this->id])) {
            $this->quantity = $this->myAssociativeArray[$this->id]['quantity'];
            $this->text="Update Cart";
        }
        $this->pharmacy = $pharmacy;
    }
    public function addToCart()
    {
        if($this->quantity > 0){
        $myAssociativeArray = session('my_associative_array', []);
        $newKey = $this->pharmacy->id;
        $newValue = ['name' => $this->pharmacy->name, 'price' => $this->pharmacy->price, 'quantity' => $this->quantity];
        $myAssociativeArray[$newKey] = $newValue;
        session(['my_associative_array' => $myAssociativeArray]);
        
        $this->text="Update Cart";
        session()->flash('status', 'Item Added to Cart');
        
        }
        // session()->forget('my_associative_array');  

    }
    public function increment()
    {
        $this->quantity++;
    }
    public function decrement()
    {
        $myAssociativeArray = session('my_associative_array', []);

        dd($myAssociativeArray);
        if ($this->quantity > 0)
            $this->quantity--;
    }
    public function render()
    {
        return view('livewire.rec-pharmacy')->with('pharmacies', \App\Models\Pharmacy::paginate(8));
    }
}
