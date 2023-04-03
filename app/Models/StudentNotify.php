<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentNotify extends Model
{
    use HasFactory;
    protected $fillable = [
           'student_id','user_id','title','message','send_by','status','image'
        ];
}
