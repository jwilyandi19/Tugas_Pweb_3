<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Course;
use App\Question;
class TeacherController extends Controller
{
	public function __construct(){
        $this->middleware('auth');
    }
    public function create() {
    	return view('teacher.create');
    }

    public function store(Request $request) {
    	$credentials = $request->only('cour_name','cour_desc','quest_num');
    	$validator = Validator::make($credentials,[
    		'cour_name' => 'required',
    		'cour_desc' => 'required',
    		'quest_num' => 'required|numeric',
    	]);

    	if($validator->fails()) {
    		return redirect('/create')->withErrors($validator);
    	}
    	$user_id = Auth::user()->user_id;
    	//dd($user_id);

    	$create = Course::create([
    		'user_id' => $user_id,
    		'cour_name' => $credentials['cour_name'],
    		'cour_desc' => $credentials['cour_desc'],
    		'quest_num' => $credentials['quest_num'],
    	]);
    	//dd($create);

    	$id = $create['cour_id'];

    	return redirect()->action('TeacherController@createquestion',['id' => $id]);


    }

    public function createquestion($id) {

    	$numberquestion = DB::table('courses')->where('cour_id', $id)->value('quest_num');
    	return view('teacher.createquestion')->with('quest_num',$numberquestion);
    }

    public function storequestion(Request $request) {
    	$question = $request->all();
    	dd($question);
    	$questnum = intval($question['questnum']);
    	$flag = 0;
    	for($i=1; $i<=$questnum; $i++) {
    		$create = Question::create([
    			'quest_text' => $question["question[$i]"],
    			'opt_a' => $question["optiona[$i]"],
    			'opt_b' => $question["optionb[$i]"],
    			'opt_c' => $question["optionc[$i]"],
    			'opt_d' => $question["optiond[$i]"],
    			'true_answer' => $question["trueanswer[$i]"],
    		]);

    	}


    	return redirect('/home');




    }

    public function show() {
    	return view('teacher.contest');
    }

    public function editcontest() {

    }

    public function showcontest() {

    }

    public function editquestion() {

    }
}
