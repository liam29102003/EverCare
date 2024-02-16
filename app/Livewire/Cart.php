<?php

namespace App\Livewire;

use App\Models\Voucher;
use Livewire\Component;

class Cart extends Component
{
    public $cart = [];
    public $price;
    public $quantity;
    public $key;
    
    public function updatedQuantity()
    {
        dd($this->quantity);
        // Update the price when the quantity is updated
        $this->price = $this->quantity * 10; // Adjust the formula based on your pricing logic
    }
    public function deleteCart()
    {
        
        session()->forget('my_associative_array');
        session()->flash('status', 'Cart has been cleared!');
        return $this->redirect('/receptionist/pharmacy',navigate:true);
    }
    public function handleMessageFromChild($message)
    {
        $this->quantity = $message;
    }
    public function checkOut()
    {
        $this->cart = session('my_associative_array', []);
        // dd($this->cart[0]);
        session()->forget('my_associative_array');
        foreach($this->cart as $key=>$value){
        Voucher::create(
            [
                'medical_record_id'=>$value['mr_id'],
                'name'=>$value['name'],
                'amount'=>$value['price'],
                'quantity'=>$value['quantity'],
                'price'=>0
            ]

            );
            $this->key = $key;
        }
        return $this->redirect('/receptionist/voucher/'.$this->cart[$this->key]['mr_id']);

        // dd($this->cart);

    }
    public function render()
    {
        $this->cart = session('my_associative_array', []);
        return view('livewire.cart');
    }
}
