<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Solution;


class StudentController extends Controller
{
   public function showform(){

   	return view('addstudent');
   }

   public function showdata()
   {

   				$get=user::all();
    	return view('viewalluser', compact('get'));
   }
   public function delete(Request $request){

   	user::where('id',$request->id)->delete();
   	return redirect('showstudent');
   }

   public function showtask(){

      $get=Solution::all();
      return view('viewtask',compact('get'));
   }
}