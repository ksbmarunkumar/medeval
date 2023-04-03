<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OspTestQuesAnswer extends Model
{
    protected $table  = 'osp_question_ans';
    protected $fillable = [ 'osp_tests_id', 'osp_question_tests_id', 'answer'];
}