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
    #[Validate('required|min:3')]

    public $name;
    #[Validate('required|min:3')]

    public $email;
    #[Validate('required|min:3')]

    public $password  = "EverCareStaff";
    #[Validate('required|min:3')]

    public $phone;
    #[Validate('required|min:3')]

    public $address;
    #[Validate('required|min:3')]

    public $gender;
    #[Validate('required|min:3')]

    public $dob;
    #[Validate('required|min:3')]

    public $image;
    #[Validate('required|min:3')]

    public $role;
    #[Validate('required|min:3')]

    public $qualification;
    #[Validate('required|min:3')]

    public $note;
    #[Validate('required|min:3')]
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
            return $this->redirect(route('staff.index'), navigate:true);
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
