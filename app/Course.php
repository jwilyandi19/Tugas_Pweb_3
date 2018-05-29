<?php

namespace App;

use App\Question;
use App\User;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
	protected $primaryKey = "cour_id";
    public $incrementing = true;
	protected $fillable = [
		'user_id','cour_name','cour_desc'

	];

    public function user() {
    	return $this->belongsTo(User::class);
    }

    public function question() {
    	return $this->hasMany(Question::class);
    }


}
