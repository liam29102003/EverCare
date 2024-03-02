<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MedicalRecord extends Model
{
    use HasFactory;
    protected $fillable = ['patient_id','doctor_id','disease','symptoms','weight','blood pressure','note','treatment_type','next_doctor_id'];
    public function prescription()
    {
        return $this->hasMany(Prescription::class);
    }
    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }
    public function doctor()
    {
        return $this->belongsTo(Doctor::class);
    }
}
