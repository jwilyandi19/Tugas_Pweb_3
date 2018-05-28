<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
	protected $primaryKey = "cour_id";
    public function user() {
    	return $this->belongsTo('App\User');
    }

    public function question() {
    	return $this->hasMany(Question::class);
    }
}
