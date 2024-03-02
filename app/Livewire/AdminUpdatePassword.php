<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminUpdatePassword extends Component
{

    public $currentPassword;
    public $newPassword;
    public $confirmPassword;

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

        $user = \App\Models\Admin::where('email', Auth::user()->email)->first();

        if (!Hash::check($this->currentPassword, $user->password)) {
            $this->addError('currentPassword', 'The current password is incorrect.');
            return;
        }

        $user->password = Hash::make($this->newPassword);
        $user->save();

        session()->flash('status', 'Password updated successfully!');
        $this->reset(['currentPassword', 'newPassword', 'confirmPassword']);
        $this->redirect('/admin/update/password', navigate: true);
    }

    // public function render()
    // {
    //     return view('livewire.admin-update-password');
    // }
}

