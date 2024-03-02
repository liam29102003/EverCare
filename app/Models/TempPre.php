<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TempPre extends Model
{
    use HasFactory;
    protected $fillable = ['medicine_name','dosage','frequency','duration','note','medical_record_id','quantity','type'];
}
