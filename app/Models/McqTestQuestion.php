<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class McqTestQuestion extends Model
{
    use HasFactory;
    
    protected $fillable = [
            'mcq_test_id','question','answer1','answer2','answer3','answer4','right_ans','que_marks'
        ];
}
