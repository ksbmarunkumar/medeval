<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class McqTest extends Model
{
    use HasFactory;
    
    protected $fillaqble = [
            'teacher_id','test_name','subject_id','marks','duration','no_of_que','branch' 
        ];
}
