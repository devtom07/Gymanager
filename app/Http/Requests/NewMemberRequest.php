<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NewMemberRequest extends FormRequest
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
            'name'=>'required|min:5|max:30|not_regex:/([!@#$%^&*])/i',
            'phone'=>'required|numeric|not_regex:/([!#$%^&*])/i|regex:/(0)[0-9]{9}/',
            'email'=>'required|email|min:5|max:40|not_regex:/([!#$%^&*])/i|regex:/(.*)@gmail\.com/i',
            'content'=>'required|min:5|max:191'
        ];
    }

    public function messages(){
        return [
            'required'=>':attribute không được để trống',
            'min'=>':attribute không được để dưới 5 kí tự',
            'email.max'=>'Tiêu đề không được quá 40 kí tự',
            'not_regex'=>'vui lòng không được để kí tự đặc biệt!',
            'name.max'=>'Tên không được để quá 30 ký tự',
            'email.email'=>'vui lòng để đúng định dạng email!',
            'email.regex'=>'Vui lòng để dúng định dạng email',
            // 'phone.size'=>'Vui nhập đủ 10 số',
            'phone.regex'=>'Vui lòng nhập đúng định dạng',
            'phone.numeric'=>'Vui lòng nhập đúng định dạng!'
        ];
    }
    public function attributes(){
        return[
            'name'=>'Tên',
            'email'=>'email',
            'phone'=>'Số điện thoại',
            'content'=>'Nội dung'
        ];
    }
}
