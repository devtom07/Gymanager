<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CustomerAccountRequest extends FormRequest
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
            'name'=>['required','min:5','max:20','regex:/^[^(\|\]~`!%^&*=};:?><’)]*$/'],
            'email'=>'required|min:15|max:40|email|regex:/(.*)@gmail\.com/i|not_regex:/([!#$%^&*])/i|unique:customer_accounts',
            'password'=>'required|min:6|max:15|not_regex:/([!@#$%^&*])/i'
        ];
    }

    public function messages(){
        return [
        'required'=>':attribute không được để trống',
        'name.min'=>'Tên không được nhỏ hơn 5 kí tự',
        'name.max'=>'Tên không được quá 20 kí tự',
        'name.regex'=>'không đúng đi định dạng',
        'name.unnique'=>'Đã bị trùng vui lòng nhập tên khác',
        'not_regex'=>':attribute không được để kí tự đặc biệt',
        'email.min'=>'Email không được nhỏ hơn 15 kí tự',
        'email.max'=>'Email không được quá 40 kí tự',
        'email.email'=>'không đúng đi định dạng',
        'email.regex'=>'không đúng đi định dạng',
        'email.unique'=>'Email đã tồn tại vui lòng nhập tên khác',
        'password.min'=>'Mật khẩu không để dưới 6 kí tự',
        'password.max'=>'Mật khẩu không để quá 15 kí tự',
        ];

    }
    public function attributes(){
        return[
        'name'=>'tên tài khoản',
        'email'=>'Email',
        'password'=> 'Mật khẩu'
        ];
    }
}
