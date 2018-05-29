<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function show() {
      return view('student.contest'); // menampilkan contest2 yg tersedia
    }

    public function take() {
      return view('student.take'); // menampilkan contest2 yg tersedia
    }
}
