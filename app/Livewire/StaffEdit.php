<?php

namespace App\Livewire;

use App\Models\Staff;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\Attributes\Validate;

class StaffEdit extends Component
{
    use WithFileUploads;
    public $staff;
    #[Validate('required')]

    public $name;
    #[Validate('required')]

    public $email;
    #[Validate('required')]

    public $password  = "EverCareStaff";
    #[Validate('required')]

    public $phone;
    #[Validate('required')]

    public $address;
    #[Validate('required')]

    public $gender;
    #[Validate('required')]

    public $dob;
    #[Validate('required')]

    public $image;
    #[Validate('required')]

    public $role;
    #[Validate('required')]

    public $qualification;
    #[Validate('required')]

    public $note;
    #[Validate('required')]
    public $oldImage ;

    public $salary;
    public function mount($staff)
    {
        $this->staff = $staff;
        $this->name = $staff->name;
        $this->email = $staff->email;
        $this->phone = $staff->phone;
        $this->address = $staff->address;
        $this->gender = $staff->gender;
        $this->dob = $staff->dob;
        $this->role = $staff->role;
        $this->qualification = $staff->qualification;
        $this->note = $staff->note;
        $this->salary = $staff->salary;
        $this->oldImage = $staff->image;

    }
    public function save(Staff $staff)
    {
        $staff->name = $this->name;
        $staff->email = $this->email;
        $staff->phone = $this->phone;
        $staff->address = $this->address;
        $staff->gender = $this->gender;
        $staff->dob = $this->dob;
        $staff->role = $this->role;
        $staff->qualification = $this->qualification;
        $staff->note = $this->note;
        $staff->salary = $this->salary;
        if($this->image)
        $path = $this->image->store('images', 'public');
        else
        $path = $this->oldImage; 
        // dd($path);

        $staff->image = $path;
        if($staff->save()){
            session()->flash('status', 'Successfully updated.');
            return $this->redirect(route('staff.list'), navigate:true);
            }
            else{
                session()->flash('status', 'Fail to update.');
            }

    }
    public function render()
    {
        return view('livewire.staff-edit');
    }
}
