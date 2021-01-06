<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\T_Complain;
use App\Http\Requests\T_ComplainRequests;
use Illuminate\Support\Facades\DB;

//use Validator;

class T_ComplainController extends Controller
{

   
   
	
function check(Request $request){
	
$check = new T_Complain();
 $data= $check->get();
                    
	 
	 
	 
	   return view('t_complain.check')->with('users', $data);
 }




	    public function insert(Request $request){
        return view('t_complain.insert');
    }








	   public function store(T_ComplainRequests $request){
	
        $user = new T_Complain();
        $user->complain     = $request->complain;
        $user->reply    = '';
		$user->product_name = $request->session()->get('username');	
        $user->save();

        return redirect()->route('home.ctacheck');
    }
	
	
	  

 function delete($id){

   
    	
        $user = T_Complain::find($id);
        return view('t_complain.delete')->with('user', $user);

    }
 function destroy($id, Request $request){
    	
    
        if(T_Complain::destroy($id)){
            return redirect()->route('home.ctacheck');
        }else{
            return redirect()->route('home.ctacheck', $id);
        }
    }


}
