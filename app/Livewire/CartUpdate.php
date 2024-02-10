<?php

namespace App\Livewire;

use App\Models\Pharmacy;
use Livewire\Component;

class CartUpdate extends Component
{
    // public $item;
    public $name;
    // public $price;
    public $id;
    public $quantity;
    public $myAssociativeArray = [];
    public $price;
    public $pharmacy;
    public function mount($cart, $id)
    {
        $this->myAssociativeArray = session('my_associative_array', []);
        $this->id = $id;
        $this->price = $cart['price'];
        $this->name = $cart['name'];
        $this->price = $cart['price'];
        $this->quantity = $cart['quantity'];
        $this->pharmacy = Pharmacy::find($id);
    }
    public function increment()
    {

        $this->quantity++;
        if (isset($this->myAssociativeArray[$this->id])) {
            $this->myAssociativeArray[$this->id]['quantity'] = $this->quantity;

            // Store the updated array back in the session
            session(['my_associative_array' => $this->myAssociativeArray]);
        }
    }
    public function updatedQuantity()
    {
        // Check if the input is empty and set it to 0
        if (empty($this->quantity)) {
            $this->quantity = 1;
        }
        if ($this->quantity > $this->pharmacy->quantity) {
            $this->quantity = $this->pharmacy->quantity;
        }
    }
    public function decrement()
    {
        if ($this->quantity > 0)
            $this->quantity--;
    }
    public function delete()
    {
        // Retrieve the associative array from the session
        $myAssociativeArray = session('my_associative_array', []);

        // Specify the key of the item you want to delete
        $keyToDelete = $this->id;

        // Check if the key exists in the array before attempting to delete
        if (array_key_exists($keyToDelete, $myAssociativeArray)) {
            // Remove the item from the array
            unset($myAssociativeArray[$keyToDelete]);

            // Store the modified array back into the session
            session(['my_associative_array' => $myAssociativeArray]);
        }
        if(empty($myAssociativeArray))
        {
            session()->flash('status', 'Cart is empty!');
            return $this->redirect('/receptionist/pharmacy',navigate:true);
        }
        session()->flash('status', 'Item has been removed from cart!');
        return $this->redirect('/receptionist/cart',navigate:true);
    }

    public function render()
    {
        return view('livewire.cart-update');
    }
}
