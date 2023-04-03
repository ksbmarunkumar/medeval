<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $fillable = [
        'univercity_id','admission_no','name','mobile_no','email','password','student_code','semester_id','section','year_of_joining','branch','batch_id','image'
    ];
}
