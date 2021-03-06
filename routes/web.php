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

use App\Http\Controllers\Mas_ProgramController;
use App\Mas_Program;

Route::get('/', function () {
   // return view('welcome');
   return view('main');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/faculty', 'Mas_FacultyController@index')->name('faculty');
Route::get('/program','Mas_ProgramController@index')->name('program');
Route::get('/instructor','InstuctorCourseController@index')->name('instructor');
