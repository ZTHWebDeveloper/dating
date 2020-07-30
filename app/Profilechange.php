<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profilechange extends Model
{
    protected $fillable=[
    	 'user_id',
    	 'profile',
    	 'name',
    ];
}
