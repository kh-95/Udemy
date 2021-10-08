<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable =[
        'first_name', 'last_name', 'email', 'phone', 'message', 'user_id'

    ];


    public function user(){


        return $this->belongsto(user::class,'user_id');
    }
}
