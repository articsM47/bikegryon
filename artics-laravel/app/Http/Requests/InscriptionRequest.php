<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InscriptionRequest extends FormRequest
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
              'name'=>'required|min:3|max:20|alpha',
        	'firstname'=>'required|min:3|max:20|alpha',
            'birthDay'=>'required|max:10',
            'email1'=>'required|email',
        ];
    }
}
