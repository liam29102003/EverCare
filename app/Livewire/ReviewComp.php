<?php

namespace App\Livewire;

use App\Models\Review;
use Livewire\Component;
use Livewire\WithPagination;

class ReviewComp extends Component
{
    use WithPagination;

    public $name;
    public $email;
    public $message;
    public function mount(){
        $this->name = session('name');
        $this->email = session('email');
    }
    public function render()
    {
        $reviews = Review::paginate(3);
        return view('livewire.review-comp')->with(['reviews' => $reviews]);
    }

    public function saveReview(){
        $this->validate([
            'name' =>'required',
            'email' =>'required',
          'message' =>'required'
        ]);

        Review::create([
            'name'=>$this->name,
            'email'=>$this->email,
         'message'=>$this->message,
        ]);

        $this->message = '';

        return back()->with(['status'=>'Review message sent successfully']);
    }
}
