<?php

namespace App;
use App\Course;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
	protected $primaryKey = "quest_id";
	public $incrementing = true;
	protected $fillable = [
		'quest_text','opt_a','opt_b','opt_c','opt_d','true_answer'
	];


    public function course() {
    	return $this->belongsTo(Course::class);
    }
}
