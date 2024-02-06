<?php

namespace App\Livewire;

use App\Models\Doctor;
use Livewire\Component;
use Livewire\Attributes\Validate;

class DoctorForm extends Component
{
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
    public $email='';

    public function save()
    {
        Doctor::create(
            $this->only(['name', 'speciality', 'qualification', 'gender', 'from', 'to', 'bio'])
        );
        return redirect('/doctor');;
    }
    public function render()
    {
        return view('livewire.doctor-form');
    }
}
