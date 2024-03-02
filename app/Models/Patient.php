<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class patient extends Authenticatable
{
    use HasFactory;
    protected $fillable = [
        'name','password',
        'email',
        'phone',
        'dob',
        'gender',
        'address',
        'patient_id'
    ];
}
