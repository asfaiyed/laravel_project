<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class T_UserRequests extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'username'  => 'required|min:3',
            'password'      => 'required|min:6',
			'email'      => 'required|email:rfc,dns',
			'gender'      => 'required',
			'education'      => 'required',
			'myfile'        =>   'mimes:jpeg,bmp,png'
		
        
        ];
    }

    public function messages(){

        return [
            'username.required'  => "Username can't be empty",
            'username.min'  => "Username can't be less than three characters",
			'password.required'  => "Password can't be empty",
			'password.min'  => "Password can't be less than six characters",
			'email.required'  => "Email can't be empty",
			'email.email'  =>  "Email must be a valid email address", 
			'gender.required'  => "Gender can't be empty",
			'education.required'  => "Education can't be empty",
			'type.required'  => "Type can't be empty",
			'myfile.mimes'  => "Picture must be a file of type: jpeg, bmp, png",
			
			
        ];
    }
}
