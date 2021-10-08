<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
protected $fillable =[

    'title', 'description', 'url', 'duration', 'course_id'
];



public function course(){

    return $this->belongsto(course::class,'course_id');
}
}
