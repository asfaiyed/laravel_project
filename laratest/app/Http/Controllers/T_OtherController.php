<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\T_Other;


use Illuminate\Support\Facades\DB;

//use Validator;

class T_OtherController extends Controller
{


function other(Request $request){
	
$other = new T_Other();
 $data= $other->get();
                    
	 
	 
	 
	   return view('t_other.other')->with('users', $data);
 }

  


}
