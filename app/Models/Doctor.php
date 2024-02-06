<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
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
