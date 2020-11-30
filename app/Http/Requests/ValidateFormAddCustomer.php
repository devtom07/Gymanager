<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidateFormAddCustomer extends FormRequest
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
                'phone'=>'required|min:10|max:11|regex:[^[0-9\-\+]{9,15}$]',
                'email' => 'unique:users,email,' . $this->id,
                'customRadio' => 'required',
                'note'    => 'required|min:5',
                'address' => 'required|min:5',
                'contract_code' => 'required|min:5',
                'identity_card' => 'required|min:12',
                'level' => 'required'
        ];
    }
    public function messages()
    {
        return [
             'name.required' => 'Không được phép để trống !',
            'phone.required' => 'Số điện thoại không được để trống !',
            'phone.min' => 'Số điện thoại không được ít hơn 10 số',
            'phone.max' => 'Số điện thoại không được nhiều hơn 11 số',
            'phone.regex'=>'Số điện thoại không đúng định dạng',
            'email.required' => 'Email không được để trống!',
            'email.email' => 'Email sai định dạng! Ví dụ: abc@gmail.com',
            'email.unique'=>'Email da duoc su dung',
            'customRadio.required' => 'Không được phép để trống !',
            'note.required' => 'Không được phép để trống !',
            'note.min' => 'Tối thiểu là 5 kí tự',
            'contract_code.required' => 'Không được phép để trống !',
            'contract_code.min' => 'Tối thiểu là 5 kí tự',
            'identity_card.required' => 'Không được phép để trống',
            'identity_card.min' => 'Chứng minh thư nhập không đúng định dạng !',
            'level.required' => 'Không được phép để trống'
        ];
    }
}
