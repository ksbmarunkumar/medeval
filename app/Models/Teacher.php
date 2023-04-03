<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;

    protected $fillable= [
        'name','mobile','email','password','joinig_date','class_name','image','gender','DOB','qualification','subject_id','department_id'
    ];
    
    protected $appends = ['fullimage'];
    
    public function getFullImageAttribute()
    {
        if($this->image != null){
            $new_name = $this->image;
            return URL('/teacher_images/').'/'.$new_name;
        }else{
            return URL('/teacher_images/').'/defaultImage.png';
        }

    }
}
