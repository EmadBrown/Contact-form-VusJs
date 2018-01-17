<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required|numeric'
        ];
    }

   public function messages()
   {
       return [
           'name.required' => 'A name is required',
           'email.required' => 'An email is required',
           'phone.required'  => 'A phone number is required',
           'phone.numeric'  => 'A phone number should be numeric'

       ];
   }
}
