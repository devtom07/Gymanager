<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidateEditStaff extends FormRequest
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
            'avatar' => 'required',
            'phone' => 'required|regex:/(0)[0-9]/|not_regex:/[a-z]/|min:9',
            'email' => 'required',
            'address' => 'required|min:5',
            'contract' => 'required',
            'wage' => 'required',
            'title' => 'required',

        ];
    }
    public function messages()
    {
        return [
            'required' => ':attribute không được để trống',
            'name.unique' => 'Da ton tai !',

        ];
    }
    public function attributes()
    {
        return [
            'name' => 'Tên nhân viên',
            'avatar' => 'Ảnh đại diện',
            'email' => 'email',
            'phone' => 'Số điện thoại',
            'address' => 'Địa chỉ',
            'contract' => 'Loại hợp đồng',
            'wage'=>'Mức lương',
            'title' => 'Chức vụ',
        ];
    }
}