<?php

namespace App\Livewire;

use App\Models\patient;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UpdatePassword extends Component
{
    public $currentPassword;
    public $newPassword;
    public $confirmPassword;
    public $email;
    public function mount($email)
    {
        $this->email = $email;
    }
    public function render()
    {
        return view('livewire.update-password');
    }

    public function updatePassword()
    {
        $this->validate([
            'currentPassword' => 'required',
            'newPassword' => 'required|min:6|',
            'confirmPassword' => 'required|same:newPassword',
        ]);

        $user = patient::where('email',$this->email)->first();

        if (!Hash::check($this->currentPassword, $user->password)) {
            $this->addError('currentPassword', 'The current password is incorrect.');
            return;
        }

        $user->password = Hash::make($this->newPassword);
        $user->save();

        session()->flash('status', 'Password updated successfully!');
        $this->reset(['currentPassword', 'newPassword', 'confirmPassword']);
        $this->redirect('profile',navigate:true);
    }
}
