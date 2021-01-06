<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\T_User;


use Illuminate\Support\Facades\DB;

//use Validator;

class T_CustomersController extends Controller
{

   
   
	
function customers()
	
	 {
        $List = T_User::all()->where('type','customer');
        
        return view('t_customers.customers')->with('tlist',$List);
    }
   
	
	function search(Request $req)
    {
       
        
        $List = T_User::where('type','customer')
                                ->where('username', 'like', '%'.$req->key.'%')
                                ->orWhere('type','customer')
                                ->where('email', 'like', '%'.$req->key.'%')
                                ->get();
        
        return view('t_customers.customerslist')->with('tlist',$List);
    }




}
