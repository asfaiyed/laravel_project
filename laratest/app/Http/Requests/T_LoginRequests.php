<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class T_LoginRequests extends FormRequest
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
            'password'      => 'required|min:6'
			
		
        
        ];
    }

    public function messages(){

        return [
            'username.required'  => "Username can't be empty",
            'username.min'  => "Username can't be less than three characters",
			'password.required'  => "Password can't be empty",
			'password.min'  => "Password can't be less than six characters",
			
			
			
        ];
    }
}
