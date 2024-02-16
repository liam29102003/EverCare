<?php

namespace App\Livewire;

use Livewire\Component;

class Cart extends Component
{
    public $cart = [];
    public $price;
    public $quantity;
    
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
    public function render()
    {
        $this->cart = session('my_associative_array', []);
        return view('livewire.cart');
    }
}
