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
    public $count =0;
    public function mount($pharmacy,$count)
    {
        $this->count = $count;
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
        $this->dispatch('updateParent', count( session('my_associative_array', [])));
            // dd(count(session('my_associative_array', [])));
        // return $this->redirect('/receptionist/pharmacy', navigate:true);
        }
        // session()->forget('my_associative_array');  

    }
    
    public function increment()
    {
        $this->quantity++;
    }
    public function decrement()
    {
       
        if ($this->quantity > 0)
            $this->quantity--;
    }
    public function render()
    {
        return view('livewire.rec-pharmacy')->with('pharmacies', \App\Models\Pharmacy::paginate(8));
    }
}
