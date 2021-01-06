<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class T_ComplainRequests extends FormRequest
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
            
            'complain'      => 'required'
        
        ];
    }

    public function messages(){

        return [
           
			'complain.required'  => "Complain can't be empty",
			
        ];
    }
}
