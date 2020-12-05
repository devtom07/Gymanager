<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidateFormHymnalupdate extends FormRequest
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
            'start_hour' => 'required',
            'end_hour' => 'required|after:start_hour',
            'describe' => 'required'
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'không được phép để trống !',
            'start_hour.required' => 'không được phép để trống !',
            'end_hour.required' => 'Không được phép để trống !',
            'end_hour.after' => 'Giờ kết thúc phải sau giờ bắt đầu',
            'describe.required' => 'Không được phép để trống !',

        ];
    }
}
