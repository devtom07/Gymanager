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
            'email'=>'required|email|regex:/(.*)@gmail\.com/i|exists:customer_accounts',
            'password'=>'required'
        ];
    }
    public function messages(){
        return[
        'email.required'=>'Gmail không được để trống',
        'email.email'=>'Gmail không đúng dịnh dạng',
        'email.regex'=>'Gmail không đúng dịnh dạng',
        'email.exist'=>'Gmail không tồn tại',
        'password.required'=>'Mật khẩu không được để trống',
        // 'password.min'=>'Mật khẩu khoản không được nhỏ hơn 6 kí tự',
        // 'password.max'=>'Mật khẩu khoản không được lớn hơn 14 kí tự'
        ];
    }
}
