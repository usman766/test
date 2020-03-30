<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Result;

class ResultController extends Controller
{
  public function insert(Request $request){

   //$q1=$request['q[]'];
    //$final_ans=0;
    //$final_ans=$final_ans+$q1++;
     $q = array_sum($request['q']);

          return $q;
 

   $data= new Result;
   $data->marks=$q;
   $data->save();
    return redirect()->back()->with('message', 'Your Record has been recorded');


  }
}
