<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ValidateFormProfile extends FormRequest
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
        'phone' => 'required|min:10|max:11|regex:[^[0-9\-\+]{9,15}$]',
            'email' => 'required|email',

        ];
    }
    public function messages()
    {
        return [
            'phone.required' => 'Số điện thoại không được để trống',
            'phone.min' => 'Số điện thoại không được ít hơn 10 số',
            'phone.max' => 'Số điện thoại không được nhiều hơn 11 số',
            'phone.regex'=>'Số điện thoại không đúng định dạng',
            'new_password.regex' => 'Mật khẩu là có chữ và số (Không có ký tự đặc biệt!)',
            'email.required' => 'không được phép để trống',
            'email.email' => 'Cần nhập đúng định dạng email'

        ];
    }
}
