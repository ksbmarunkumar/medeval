<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TeacherNotify extends Model
{
    use HasFactory;
    protected $fillable = [
            'title','message','status','image','send_by','user_id'
        ];
        
    public function getFullImageAttribute()
    {
        if($this->image != null){
            $new_name = $this->image;
            return URL('/admin_images/').'/'.$new_name;
        }else{
            return URL('/admin_images/').'/defaultImage.png';
        }

    }
}
