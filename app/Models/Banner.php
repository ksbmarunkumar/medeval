<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    use HasFactory;
    
    protected $fillable = [
            'title','image','status','url'
        ];
        
   protected $appends = ['fullimage'];
    
    public function getFullImageAttribute()
    {
        if($this->image != null){
            $new_name = $this->image;
            return URL('/banner_images/').'/'.$new_name;
        }else{
            return URL('/banner_images/').'/defaultImage.png';
        }

    }
}
