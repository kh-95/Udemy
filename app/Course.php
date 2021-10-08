<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{

    protected $fillable = [
         'title', 'price', 'image', 'short_description', 'description', 'category_id', 'is_active'
    ];

protected $appends =['total_duration'];
    public function category(){


        return $this->belongsto(category::class,'category_id');
    }
    public function lessons (){
        return $this->hasMany(lesson::class,'course_id');
    }
    public function reviews (){
        return $this->hasMany(review::class,'course_id');
    }
    public function getTotalDurationAttribute (){
        $this->lessons->sum('duration');
    }

}
