<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
protected $fillable=[
    'comment', 'user_id', 'post_id'

];



    public function post(){

        return $this->belongsto(post::class,'post_id');
    }
    public function user(){

        return $this->belongsto(user::class,'user_id');
    }
}
