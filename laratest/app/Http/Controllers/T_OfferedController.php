<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\T_Offered;

use Illuminate\Support\Facades\DB;

//use Validator;

class T_OfferedController extends Controller
{
 
	
function Offered(Request $request){
	
$offered = new T_Offered();
 $data= $offered->get();
                    
	   return view('t_offered.offered')->with('users', $data);
 }





}
