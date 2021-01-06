<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\T_Fileupload;
use App\Http\Requests\T_FileuploadRequests;
use Illuminate\Support\Facades\DB;

//use Validator;

class T_FileuploadController extends Controller
{

   function check(Request $request){
	
$check = new T_Fileupload();
 $data= $check->get();
                    
	 
	 
	 
	   return view('t_fileupload.check')->with('users', $data);
 }
   
	




	    public function upload(Request $request){
        return view('t_fileupload.fileupload');
    }

	   public function store(T_FileuploadRequests $request){
  
  if($request->hasFile('myfile')){
            $file = $request->file('myfile');
            $filename = $file->getClientOriginalName();
			
            echo "File Extension: ". $file->getClientOriginalExtension()."<br>";
            echo "File Size: ". $file->getSize()."<br>";
            echo "File Mime Type: ". $file->getMimeType();
        
            if($file->move('upload', $filename)){
                $user = new T_Fileupload();
        $user->product_name    = $request->name;
        $user->filename   = $filename;
	
        $user->save();   
            }else{
                echo "<h1>Error!</h1>";
            }
        }

       

        return redirect()->route('home.checknotes');
    }
	
	function delete($id){

   
    	
        $user = T_Fileupload::find($id);
        return view('t_fileupload.delete')->with('user', $user);

    }
 function destroy($id, Request $request){
    	
    
        if(T_Fileupload::destroy($id)){
            return redirect()->route('home.check');
        }else{
            return redirect()->route('home.check', $id);
        }
    }


}
