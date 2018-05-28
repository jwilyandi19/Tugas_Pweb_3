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

Route::get('/login','AuthController@index')->name('login');
Route::post('/login','AuthController@login');
Route::get('/home','AuthController@home');
Route::get('/logout','AuthController@logout')->name('logout');
Route::get('/register','AuthController@register')->name('register');
Route::post('/register','AuthController@store');


Route::group(['middleware' => 'App\Http\Middleware\StudentMiddleware'], function() {

	Route::get('/student','AuthController@student');

});

Route::group(['middleware' => 'App\Http\Middleware\TeacherMiddleware'], function() {

	Route::get('/teacher','AuthController@teacher');

});

Route::get('/unauthorized','AuthController@unauthorized');


