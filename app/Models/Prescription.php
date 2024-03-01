<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prescription extends Model
{
    use HasFactory;
    protected $fillable = ['temp_id','medicine_name','dosage','frequency','duration','status','medical_record_id','quantity','type','buyOrNot'];
    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }
}
