<?php

namespace App\Livewire;

use App\Models\Doctor;
use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Specialization;
use Livewire\Attributes\Validate;

class EditDoctor extends Component
{
    use WithFileUploads;

    public $doctor;
    
public $image;
    #[Validate('required|min:3')]

    public $name;
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
    public $oldImage ;
    #[Validate('required')]

    public $exp;
    #[Validate('required')]

    public $fee;
    // #[Validate('required|min:3')]

    public function mount($doctor)
    {
        $this->doctor = $doctor;
        $this->name = $doctor->name;
        $this->speciality = $doctor->specialization_id;
        $this->qualification = $doctor->qualification;
        $this->gender = $doctor->gender;
        $this->bio = $doctor->bio;
        $this->email = $doctor->email;
        $this->phone = $doctor->phone;
        $this->exp =   $doctor->exp;
        $this->password = $doctor->password;
        $this->fee = $doctor->price;
        $this->oldImage = $doctor->image;
        // dd($this->image);
    }
    public function save(Doctor $d)
    {
        // dd($this->oldImage);
        $d->name = $this->name;
        $d->email = $this->email;
        $d->phone = $this->phone;
        $d->speciality = $this->speciality;
        $d->qualification = $this->qualification;
        $d->gender = $this->gender;
        $d->exp = $this->exp;
        $d->bio = $this->bio;
        $d->password = $this->password;
        $d->price = $this->fee;
        if($this->image)
        $path = $this->image->store('images', 'public');
        else
        $path = $this->oldImage; 
        // dd($path);

        $d->image = $path;

        if($d->save()){
        session()->flash('status', 'Successfully updated.');
        return $this->redirect(route('doctor.list'), navigate:true);
        }
        else{
            session()->flash('status', 'Fail to update.');
        }
        
    }
    public function render()
    {
        return view('livewire.edit-doctor')->with('specialities', Specialization::all());
    }
}
