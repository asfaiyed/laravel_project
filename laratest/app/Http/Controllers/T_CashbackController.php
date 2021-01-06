<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\T_Cashback;

use Illuminate\Support\Facades\DB;

//use Validator;

class T_CashbackController extends Controller
{

   
   
	
function cashback(Request $request){
	
$cashback = new T_Cashback();
 $data= $cashback->get();
                    
	 
	 
	 
	   return view('t_cashback.cashback')->with('users', $data);
 }




}
