<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeacherController extends Controller
{
	public function __construct(){
        $this->middleware('auth');
    }
    public function create() {
    	return view('teacher.create');
    }

    public function store(Request $request) {
    	$credentials = $request->only('cour_name','cour_desc');
    	$validator = Validator::make($credentials,[
    		'cour_name' => 'required'|
    		'cour_desc' => 'required'|
    	]);

    	if($validator->fails()) {
    		return redirect('/create')->withErrors($validator);
    	}

    	$create = Course::create([
    		'cour_name' => $credentials['cour_name'],
    		'cour_desc' => $credentials['cour_desc'],
    	]);

    	$id = $create['cour_id'];

    	return redirect('/create/'.$id.'/');


    }

    public function createquestion() {
    	return view('teacher.createquestion');
    }

    public function showquestion() {
    	
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
