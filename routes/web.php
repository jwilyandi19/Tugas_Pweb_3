<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login','AuthController@index');
Route::post('/login','AuthController@login')->name('login');
Route::get('/home','AuthController@home');
Route::get('/logout','AuthController@logout')->name('logout');
Route::get('/register','AuthController@register')->name('register');
Route::post('/register','AuthController@store');


Route::group(['middleware' => 'App\Http\Middleware\StudentMiddleware'], function() {

	Route::get('/student','AuthController@student');

});

Route::group(['middleware' => 'App\Http\Middleware\TeacherMiddleware'], function() {

	Route::get('/create','TeacherController@create');
	Route::post('/create/created','TeacherController@store');
	Route::get('/create/{contest}/','TeacherController@createquestion');
	Route::post('/create/{contest}/created','TeacherController@storequestion')->name('postingquestion');
	Route::get('/contest','TeacherController@show');
	Route::post('/contest/{contest}','TeacherController@editcontest');
	Route::get('/contest/show/{contest}','TeacherController@showcontest');
	Route::post('/contest/{contest}/{question}','TeacherController@editquestion');
});

Route::get('/unauthorized','AuthController@unauthorized');
