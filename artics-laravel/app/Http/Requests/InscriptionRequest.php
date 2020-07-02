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
            'firstname'=>'required|min:2|max:20|regex:[^[A-Z].*]',
        	'surname'=>'required|min:2|max:20|regex:[^[A-Z].*]',
            'birthday'=>'required|date|before:14 years ago',
            'email1'=>'required|email',
        ];
    }
}
