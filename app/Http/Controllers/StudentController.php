<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Course;
use App\Question;

class StudentController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function show() {
      $number_contest = DB::table('courses')->get();
      //dd($number_contest);
      $numberquestion = DB::table('courses')->where('cour_id', $id)->value('quest_num');
      return view('student.contest')->with('name',$number_contest); // menampilkan contest2 yg tersedia
    }

    public function take() {
      return view('student.take'); // menampilkan contest2 yg tersedia
    }
}
