<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\T_User;
use App\T_Salary;
use Illuminate\Support\Facades\DB;

//use Validator;

class T_HomeController extends Controller
{

    /*function __construct(){
        //session
    }*/
    
    function index(Request $request){

    	/*$data  = ['id'=>'1233', 'name'=>'alamin'];
    	return view('home.index', $data);*/

    	/*return view('home.index')
    			->with('name', 'alamin')
    			->with('id', '1233');*/

    	/*return view('home.index')
    			->withName('alamin')
    			->withId('1233');*/

    	/*$v = view('home.index');
    	$v->withName('alamin');
    	$v->withId('1234');
    	return $v;*/

        //$users = $this->getStudentList();

        $users = T_User::all();
        //$users = DB::table('user_table')->get();
        return view('t_home.index')->with('users', $users);
    }
    function call(){
    return view('t_home.call');
	}
}
