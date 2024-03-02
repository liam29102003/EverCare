<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    use HasFactory;
    protected $fillable=['day','to','from','doctor_id','type'];
    public function doctor()
    {
        return $this->belongsTo(Doctor::class);
    }
}
