<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidateFormaddUser extends FormRequest
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
    public function rules(){
        return [
            'name'=>'required',
            'email' => 'unique:users,email,' . $this->id,
            'phone'=>'required|min:10|max:11|regex:[^[0-9\-\+]{9,15}$]',
            'password' => 'required|min:6|max:32|regex:[^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$]',
            'password_confirm' => 'required|same:password',
            'staff_user' => 'required',
             'role'    => 'required',
            'avatar' =>'image|mimes:jpeg,jpg,png,gif|required|max:10000'
        ];
    }
    public function messages()
    {
        return [

            'name.required'=>'Tên không được để trống',
            'name.min'=>'Tên phải dài tối thiểu 8 kí tự',
            'email.required' => 'Email không được để trống!',
            'email.email' => 'Email sai định dạng! Ví dụ: abc@gmail.com',
            'email.unique'=>'Email da duoc su dung',
            'phone.required' => 'Số điện thoại không được để trống',
            'phone.min' => 'Số điện thoại không được ít hơn 10 số',
            'phone.max' => 'Số điện thoại không được nhiều hơn 11 số',
            'phone.regex'=>'Số điện thoại không đúng định dạng',
            'address.required'=>'Địa chỉ không được để trống',
            'password.required' => 'Mật khẩu không được để trống!',
            'password.min' => 'Mật khẩu phải dài hơn 6 ký tự.',
            'password.max' => 'Mật khẩu phải không được vượt quá 32 ký tự.',
            'password.regex' => 'Mật khẩu là có chữ và số (Không có ký tự đặc biệt!)',
            'password_confirm.required' => 'Không được phép để trống !' ,
            'password_confirm.same' => 'Hai mật khẩu không trùng nhau',
            'role.required' => 'Không được phép để trống',
            'staff_user.required' => 'Không được phép để trống',
            'permission.required' => 'Không được phép để trống',
            'avatar.required' => 'Không được để trống !',
            'avatar.image' => 'Cần nhập đúng định dạng file là ảnh !',
            'avatar.mimes' => 'Chỉ được nhập file jpg,png,gif',
            'avatar.max' => 'Kích thước tối đa của file là 10000 byte'

        ];
    }
}
