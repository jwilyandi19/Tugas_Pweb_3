<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
	protected $primaryKey = "quest_id";
    public function course() {
    	return $this->belongsTo('App\Course');
    }
}
