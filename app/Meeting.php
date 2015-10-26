<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DateTime;
class Meeting extends Model
{
    protected $table = 'meetings';

    protected $fillable = array('name', 'user_id', 'description', 'starting_date', 'ending_date');

    public function getStartingDate()
	{		
		return \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $this->starting_date)->format('M/d/Y @ g:i a') ;
	}

	public function getEndingDate() {
		return \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $this->ending_date)->format('M/d/Y @ g:i a');
	}

	public function getCreatedDate() {
		return \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $this->updated_at)->format('M/d/Y');
	}

    public function user()
    {
    	return $this->belongsTo('\App\User');
    }
}
