<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidateRole extends FormRequest
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
            'permission' => 'required'
        ];
    }
    public function  messages()
    {
        return [
            'name.required' => 'không được phép để trống !',
            'permission.required' => 'không được phép để trống !'
        ];
    }
}
