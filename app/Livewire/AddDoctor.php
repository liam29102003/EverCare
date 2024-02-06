<?php

namespace App\Livewire;

use App\Models\Room;
use App\Models\Doctor;
use Livewire\Component;
use App\Models\Schedule;
use GuzzleHttp\Psr7\Request;
use Livewire\WithFileUploads;
use Livewire\Attributes\Validate;
use Illuminate\Support\Facades\Hash;

class AddDoctor extends Component
{
    use WithFileUploads;


    #[Validate('required|min:3')]

    public $name = '';
    #[Validate('required|min:3')]

    public $speciality = '';
    #[Validate('required|min:3')]

    public $qualification = '';
    #[Validate('required|min:3')]

    public $gender = '';
    #[Validate('required|min:3')]

    public $bio = '';
    #[Validate('required|min:3')]

    public $email = '';
    #[Validate('required|min:3')]

    public $phone = "";
    #[Validate('required|min:3')]

    public $password = 'EverCareDoctor';
    #[Validate('required|min:3')]
    public $image;
    #[Validate('required|min:3')]
    public $exp;

    public function save()
    {
        $validated = $this->validate();
        $hashedPassword = Hash::make($this->password);
        $path = $this->image->store('images', 'public');
        // dd($path);

        Doctor::create(
            [
                'name' => $this->name,
                'speciality' => $this->speciality,
                'qualification' => $this->qualification,
                'gender' => $this->gender,
                'bio' => $this->bio,
                'email' => $this->email,
                'phone' => $this->phone,
                'password' => $hashedPassword,
                'image' => $path,
                'exp' => $this->exp,
                'created_at' => now(),
                'updated_at' => now(),
                
                
            ]
        );

        $this->image='';
        // $this->reset('image', 'name','speciality', 'qualification', 'gender', 'bio', 'email', 'phone', 'password');
        session()->flash('status', 'Expense added successfully');

        $this->reset();
        return $this->redirect('/admin/doctor/list',navigate:true);

    }
 
    public function render()
    {

        // $rooms = Room::whereNotIn(
        //     'id',
        //     Schedule::whereIn('day', $this->days)
        //         ->where(function ($query) {
        //             $query->whereBetween('to', [$this->from, $this->to])
        //                 ->orWhereBetween('from', [$this->from, $this->to]);
        //         })
        //         ->pluck('id')
        // )->get();
        return view('livewire.add-doctor');
    }
}
