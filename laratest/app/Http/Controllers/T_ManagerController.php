<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\T_User;


use Illuminate\Support\Facades\DB;

//use Validator;

class T_ManagerController extends Controller
{
 function allmanager()
    {
        $List = T_User::all()->where('type','manager');
        
        return view('t_cwm.contact')->with('tplist',$List);
    }
   
   
	

 

 function search(Request $req)
    {
       
        
        $List = T_User::where('type','manager')
                                ->where('username', 'like', '%'.$req->key.'%')
                                ->orWhere('type','manager')
                                ->where('email', 'like', '%'.$req->key.'%')
                                ->get();
        
        return view('t_cwm.contactlist')->with('tplist',$List);
    }

}
