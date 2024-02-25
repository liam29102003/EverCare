<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;
    protected $fillable= ['treatment_type','patient_type','description',
    'email','password','name','type','dob','phone',
    'gender','address','doctor_id','appointment_date','appointment_day','status','image'];
    public function doctor()
    {
        return $this->belongsTo(Doctor::class);
    }
}
