<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\T_Ratings;

use Illuminate\Support\Facades\DB;

//use Validator;

class T_RatingsController extends Controller
{

   
   
	
function ratings(Request $request){
	
$review = new T_Ratings();
 $data= $review->get();
                    
	 
	 
	 
	   return view('t_ratings.ratings')->with('users', $data);
 }





}
