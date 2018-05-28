<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
class AuthController extends Controller {
    //
    public function index() {
    	if(!Auth::user()) {
    		return view('auth.login');
    	}
    	else {
    		return redirect('/home');
    	}
    }

    public function login(Request $request) {
    	$credentials = $request->only('username','password');

    		
    	if(Auth::attempt($credentials,$request->remember)) {
    		return redirect('/home');
    	}
    	else return redirect('/login');
    }

    public function home() {
    	if(Auth::user()) {
    		return view('home');
    	}
    	else {
    		return redirect('/login');
    	}
    }

    public function logout() {
    	if(Auth::user()) {
    		Auth::logout();
    		return redirect('/login');
    	}
    	else {
    		return redirect('/login');
    	}
    }

    public function register() {
    	if(!Auth::user()) { 
    	return view('auth.register');
    	}
    	else {
    		return redirect('/home');
    	}
    }

    public function store(Request $request) {
    	$credentials = $request->only('username','email','school','password','password_confirmation','user_type');
     	$validator = Validator::make($credentials,[
            'username' => 'required|string|max:40|unique:users',
            'email' => 'required|string|email|max:20',
            'password' => 'required|string|min:6|max:20',
            'password_confirmation' => 'required|same:password',
            'school' => 'string|max:60',

        ]);
        //dd($validator);
     	if($validator->fails()) {
     		return redirect ('/register')->withErrors($validator);
     	}

    	$create = User::create([
    		'username' => $credentials['username'],
            'email' => $credentials['email'],
            'password' => bcrypt($credentials['password']),
            'school' => $credentials['school'],
            'user_type' => $credentials['user_type'],

    	]);
    


    	Auth::login($create);
    	return redirect('/home');
    }

    public function student() {
    	if(Auth::user()) {
    	return view('student');
    	}
    	else {
    		return redirect('/login');
    	}
    }

    public function teacher() {
    	if(Auth::user()) {
    	return view('teacher');
    	}
    	else {
    		return redirect('/login');
    	}
    }

    public function unauthorized() {
    	if(Auth::user()) {
    	return view('unauthorized');
    	}
    	else {
    		return redirect('/login');
    	}
    }


}
