<?php

namespace App\Livewire;

use App\Models\Admin;
use App\Models\Staff;
use Livewire\Component;
use App\Models\Receptionist;
use Livewire\WithFileUploads;
use Livewire\Attributes\Validate;
use Illuminate\Support\Facades\Hash;

class StaffCreate extends Component
{
    use WithFileUploads;
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
    #[Validate('required|image|mimes:jpeg,png,jpg,gif|max:2048')]

    public $image;
    #[Validate('required|min:3')]

    public $role;
    #[Validate('required|min:3')]

    public $qualification;
    #[Validate('required|min:3')]

    public $note;
    #[Validate('required|min:3')]

    public $salary;
  
    public function save()
    {
        // dd($this->role);
        $validated = $this->validate();
        $hashedPassword = Hash::make($this->password);
        if($this->image)
        $path = $this->image->store('images', 'public');
    else {$path = 'images/default.png';}
        // dd($path);

        Staff::create(
            [
                'name' => $this->name,
                // 'speciality' => $this->speciality,
                'qualification' => $this->qualification,
                'gender' => $this->gender,
                'email' => $this->email,
                'phone' => $this->phone,
                'address' => $this->address,
                'role' => $this->role,
                'note' => $this->note,
                'salary' => $this->salary,
                'password' => $hashedPassword,
                'image' => $path,
                'dob' => $this->dob,
                'created_at' => now(),
                'updated_at' => now(),
                
                
            ]
        );
        if($this->role == 'admin'){
            Admin::create(
                [
                    'name' => $this->name,
                    'email' => $this->email,
                    'password' =>'EverCareAdmin',
                    'created_at' => now(),
                    'updated_at' => now(),
                ]
                );
        }
        if($this->role =='receptionist'){
            Receptionist::create(
                [
                    'name' => $this->name,
                    'email' => $this->email,
                    'password' =>'EverCareStaff',
                    'created_at' => now(),
                    'updated_at' => now(),
                    'image'=>$path,
                ]
                );
        }
        session()->flash('status', 'Staff successfully added.');
        $this->image='';

        $this->reset();
        return $this->redirect(route('staff.list'), navigate:true);
    }
    public function render()
    {
        return view('livewire.staff-create');
    }
}
