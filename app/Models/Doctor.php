<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;

class Doctor extends Authenticatable
{
    use HasFactory;
    protected $fillable=[
        'name', 'speciality','exp', 'qualification', 'gender', 'bio', 'email', 'phone', 'password', 'image'
    ];
    public function schedule()
    {
        return $this->hasMany(Schedule::class);
    }
}
