<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prescription extends Model
{
    use HasFactory;
    protected $fillable = ['patient_id','doctor_id','medicine_name','dosage','frequency','duration','note','status','medical','quantity','type','buyOrNot'];
    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }
}
