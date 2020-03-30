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


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('check')->middleware('abc');

Route::get('superadmin',function(){
return view('superadmin');
});
Route::get('supervisor',function(){

 		return view('supervisor');
 });
 Route::get('student',function(){

     return view('student');
 });
Route::get('addstudent',"StudentController@showform")->name('showform');
Route::post('insertdata',"StudentController@savedata")->name('savedata');
Route::get('showstudent', "StudentController@showdata")->name('showdata');
Route::get('addtask',"AdminController@task")->name('task');

Route::post('opationdata',"AdminController@operation")->name('oparation');

Route::post('taskdata',"AdminController@inserttask")->name('inserttask');
Route::get('showtask1',"StudentController@showtask")->name('showtask');
Route::get('viewtask',"StudentController@viewtask")->name('viewtask');

Route::post('saveresult',"ResultController@insert")->name('insert');