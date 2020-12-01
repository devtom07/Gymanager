<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ValidateFormProfilePassword extends FormRequest
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
        $user = Auth::user();

        return [
            'password' => 'required|min:6|max:32|regex:[^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$]',
            'password_confirm' => 'required|same:password',
            'current_password' => ['required',function ($attribute, $value, $fail) use ($user) {
                if (!Hash::check($value, $user->password)) {
                    return $fail(__('Mật khẩu hiện tại không chính xác.'));
                }
            }],
          ];
    }
    public function messages()
    {
        return [
            'password.required' => 'Mật khẩu không được để trống!',
            'password.min' => 'Mật khẩu phải dài hơn 6 ký tự.',
            'password.max' => 'Mật khẩu phải không được vượt quá 32 ký tự.',
            'password.regex' => 'Mật khẩu là có chữ và số (Không có ký tự đặc biệt!)',
            'password_confirm.required' => 'Mục xác nhận lại mật khẩu Không được phép để trống !' ,
            'password_confirm.same' => 'Hai mật khẩu không trùng nhau',
            'current_password.required' => 'Mật khẩu hiện tại Không được phép để trống'


        ];
    }
}
