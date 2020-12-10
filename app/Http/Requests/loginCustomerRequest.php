<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class loginCustomerRequest extends FormRequest
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
            'name'=>'required|min:6|max:15|exists:customer_accounts',
            'password'=>'required'
        ];
    }
    public function messages(){
        return[
        'name.required'=>'Tên tài khoản không được để trống',
        'name.min'=>'Tên tài khoản không được nhỏ hơn 6 kí tự',
        'name.max'=>'Tên tài khoản không được quá 15 kí tự',
        'name.exist'=>'Tên tài khoản không tồn tại',
        'password.required'=>'Mật khẩu không được để trống',
        // 'password.min'=>'Mật khẩu khoản không được nhỏ hơn 6 kí tự',
        // 'password.max'=>'Mật khẩu khoản không được lớn hơn 14 kí tự'
        ];
    }
}
