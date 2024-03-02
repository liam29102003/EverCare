<?php

namespace App\Livewire;

use App\Models\MedicalRecord;
use App\Models\Voucher;
use Exception;
use Illuminate\Support\Facades\DB;
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
        return $this->redirect(url()->previous(),navigate:true);
    }
    public function handleMessageFromChild($message)
    {
        $this->quantity = $message;
    }
    public function checkOut()
    {
        DB::beginTransaction();

        $this->cart = session('my_associative_array', []);
        // dd($this->cart[0]);

        session()->forget('my_associative_array');
        try{
        foreach($this->cart as $key=>$value){
        Voucher::create(
            [
                'medical_record_id'=>$value['mr_id'],
                'name'=>$value['name'],
                'amount'=>$value['price'],
                'quantity'=>$value['quantity'],
                'price'=>$value['price']*$value['quantity'],
            ]

            );
            $this->key = $key;
        }
        // dd($this->key);
        $m = MedicalRecord::find($this->cart[$this->key]['mr_id']);
        if($m)
        {
            $m->status = 1;
            $m->save();
        }
        
        DB::commit();

        return $this->redirect('/receptionist/voucher/'.$this->cart[$this->key]['mr_id'],navigate:true);
    }
    catch(Exception $e)
    {
        DB::rollback();

    }

        // dd($this->cart);

    }
    public function render()
    {
        $this->cart = session('my_associative_array', []);
        return view('livewire.cart');
    }
}
