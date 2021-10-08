<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable =[
        'title', 'image', 'description'

    ];
    public function category (){

        return $this->belongsto(category::class,'category_id');
    }
    public function comments (){
        return $this->hasMany(comment::class,'post_id');
    }

}
