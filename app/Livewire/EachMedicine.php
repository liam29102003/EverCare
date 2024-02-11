<?php

namespace App\Livewire;

use App\Models\Pharmacy;
use Livewire\Component;

class EachMedicine extends Component
{

    public $isCheck;
    public $Check = false;
    public $medicine;
    public $exist ;
    public $qty;
    public $existQty;
    public $insufficient;
    public $id;
    public $price;
    public function mount($medicine)
    {
        $this->medicine = $medicine;
        $pharmacy = Pharmacy::where('name',$this->medicine->medicine_name)->first();
        
        $this->qty = round($this->medicine->dosage * $this->medicine->frequency * $this->medicine->duration);
        if($pharmacy){
            $this->exist = 'available';
            $this->price = $pharmacy->price;
        $this->id = $pharmacy->id;
            $this->existQty = $pharmacy->quantity;
            if($this->qty > $this->existQty){
                $this->insufficient = $this->existQty;
                $this->exist = 'warning';
            }
        }
        else{
            $this->exist = 'error';
        }
    }
    public function addToCart()
    {
                // session()->forget('my_associative_array');  

        $myAssociativeArray = session('my_associative_array', []);
        $newKey = $this->id;
        $newValue = ['name' => $this->medicine->medicine_name, 'price' => $this->price, 'quantity' => $this->insufficient ? $this->insufficient : $this->qty];
        $myAssociativeArray[$newKey] = $newValue;
        session(['my_associative_array' => $myAssociativeArray]);
        
        session()->flash('status', count(session('my_associative_array', []))." medicine(s) added to cart");
        // dd(count(session('my_associative_array', [])));

    } 
    public function render()
    {
        return view('livewire.each-medicine');
    }
}
