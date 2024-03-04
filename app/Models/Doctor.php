<?php

namespace App\Models;

use Laravel\Sanctum\HasApiTokens;
use Laravel\Jetstream\HasProfilePhoto;
use Illuminate\Support\Facades\Storage;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Doctor extends Authenticatable
{
    use HasFactory;
    protected $fillable=[
        'name','price', 'specialization_id','exp', 'qualification', 'gender', 'bio', 'email', 'phone', 'password', 'image',
    ];
    public function schedule()
    {
        return $this->hasMany(Schedule::class);
    }
    public function updateProfilePhoto($photoPath)
    {
        // Delete old photo if exists
        if ($this->profile_photo_path) {
            Storage::disk('public')->delete($this->profile_photo_path);
        }

        // Update profile photo path
        $this->profile_photo_path = $photoPath;
        $this->save();
    }
    public function specialization()
    {
        return $this->belongsTo((Specialization::class));
    }
}
