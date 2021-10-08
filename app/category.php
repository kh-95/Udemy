<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    protected $fillable = [
        'name', 'image'
    ];


    public function courses(){


        return $this->hasMany(course::class,'category_id');
    }
    public function posts(){


        return $this->hasMany(post::class,'category_id');
    }
}
