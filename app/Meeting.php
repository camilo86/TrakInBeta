<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Meeting extends Model
{
     protected $table = 'meetings';

     public function user() 
     {
     	return $this->belongsTo('App\Meeting');
     }
}
