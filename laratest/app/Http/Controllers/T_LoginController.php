<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\T_User;
use App\Http\Requests\T_LoginRequests;
use Illuminate\Support\Facades\DB;


class T_LoginController extends Controller
{
    
    function index(){
    	return view('t_login.index');
    }

    function verify(T_LoginRequests $request){
    	

         /*  $request->session()->put('username', $request->username);
            $request->session()->put('password', $request->password);
            $request->session()->get('username');
            $request->session()->foget('username');
            $request->session()->flush();
            
            $request->session()->flash('msg', 'invalid user');
            $request->session()->flash('error', 'db error');
            $request->session()->get('msg');
            $request->session()->keep('msg');
            $request->session()->reflash();

            $request->session()->has('username');
            $request->session()->pull('username');*/


       $user = new T_User();
       $data = $user->all();
       $data = T_User::where('username', $request->username)
                        ->where('password', $request->password)
						->where('type', 'customer')
                        ->get();
        
        /*$data = DB::table('user_table')
                    ->where('username', $request->username)
                    ->where('password', $request->password)
                    ->get();*/

        //print_r($data);
        //echo $data[0]->type;

    	if(count($data) > 0 ){
            $request->session()->put('username', $request->username);
            
            if($data[0]->type == "customer"){
                $request->session()->put('type', "customer");
            }

    		return redirect()->route('home.index');
    	}else{
            $request->session()->flash('msg', 'invalid username/password');
            return redirect()->route('login.index');
        }
    }
}
