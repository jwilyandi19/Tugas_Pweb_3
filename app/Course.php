<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
	protected $primaryKey = "cour_id";

	protected $fillable = [
		'cour_name','cour_desc',

	];

    public function user() {
    	return $this->belongsTo('App\User');
    }

    public function question() {
    	return $this->hasMany(Question::class);
    }
}
