<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use App\T_User;
use App\T_Available;



class T_AvailableController extends Controller
{
 
 public function index(Request $request){



    $response = Http::get('http://localhost:3000/available');
$List = json_decode($response->body());
return view('t_available.available')->with('userList', $List);
   

  


 }


}
