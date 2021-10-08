<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class userscourses extends Model
{
    protected $fillable=[
        'is_confirmed', 'user_id', 'course_id'
    
    ];
    
    
    
        public function courses(){
    
            return $this->hasMany(course::class,'course_id');
        }
        public function users(){
    
            return $this->hasMany(user::class,'user_id');
        }
}
