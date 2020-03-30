<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Question;
use App\Solution;

class AdminController extends Controller
{
    public function task(){

    	return view("task");
    
    }
    /*
    public function inserttask(Request $request){


    	$name1=$request['name'];

    	   $data=new Question;
    	   $data->question=$name1;
    	   $data->save();
    	   return redirect()->back()->with('message', 'Your Record has been recorded');
               	

    }
    */

    public function operation(Request $request){
       $name=$request['name'];
      $opation=$request['opation'];
      $answer=$request['answer'];

       $opation2=$request['opation2'];
      $answer2=$request['answer2'];

       $opation3=$request['opation3'];
      $answer3=$request['answer3'];

       $opation4=$request['opation4'];
      $answer4=$request['answer4'];

    $data= new Solution;
    
      $data->opation =$opation;
      $data->answer=$answer;

      $data->opation2=$opation2;
     $data->answer2 =$answer2;

       $data->opation3=$opation3;
      $data->answer3=$answer3;

       $data->opation4=$opation4;
      $data->answer4=$answer4;
      $data->Question=$name;
      $data->save();
       return redirect()->back()->with('message', 'Your Record has been recorded');


    }
}
