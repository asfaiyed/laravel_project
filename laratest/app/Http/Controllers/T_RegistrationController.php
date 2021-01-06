<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\T_User;
use App\Http\Requests\T_UserRequests;
use Illuminate\Support\Facades\DB;

//use Validator;

class T_RegistrationController extends Controller
{
    public function rules(Request $request){
        return view('t_registration.rules');
    }

   
   


	    public function insert(Request $request){
        return view('t_registration.index');
    }

	   public function store(T_UserRequests $request){
	 if($request->hasFile('myfile')){
            $file = $request->file('myfile');
            $filename = $file->getClientOriginalName();
			
        
            if($file->move('upload', $filename)){
        $user = new T_User();
        $user->username     = $request->username;
        $user->password    = $request->password;
		$user->email    = $request->email;
		$user->gender    = $request->gender;
		$user->education    = $request->education;
		$user->type    = $request->type;
		$user->picture    = $filename;
		$user->save();
 }else{
                echo "<h1>Error!</h1>";
            }
        }

        return redirect()->route('login.index');
	 

	   }
	

}
