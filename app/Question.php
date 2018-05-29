<?php

namespace App;
use App\Course;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
	protected $primaryKey = "quest_id";
	public $incrementing = true;
	protected $fillable = [
		'question','optiona','optionb','optionc','optiond','trueanswer'
	];

	
    public function course() {
    	return $this->belongsTo(Course::class);
    }
}
