<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Illuminate\Support\Facades\Input;
use Auth;
use Redirect;

class AuthController extends Controller
{
    //
    public function index() {
    	return view('login');
    }

    public function login() {
    	$rules = array(
    		'email' => 'required|email',
    		'password' => 'required|alphanum|min:5',			
    	);

    	$validator = Validator::make(Input::all(),$rules);

    	if($validator->fails()) {
    		return Redirect::to('login')
    			->withErrors($validator)
    			->withInput(Input::except('password'));
    	} else {
    		$userdata = array(
    			'email' => Input::get('email'),
    			'password' => Input::get('password'),

    	);

    	if(Auth::attempt($userdata)) {
    		return Redirect::to('home');
    	} else {
    		return Redirect::to('login');
    	}
    	}
    }

    public function home() {
    	return view('home');
    }

    public function logout() {
    	Auth::logout();
    	return Redirect::to('login');
    }

    public function register() {
    	return view('register');
    }

    public function store() {
    	$this->validate(request(),[
    		'name' => 'required';
    		'username' => 'required|min:5'
    		'email' => 'required|email';
    		'password' => 'required';
    		

    	]);
    }
}
