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
            'code'=>'required',
            'name' => 'required',
            'avatar' => 'required',
            'phone' => 'required|min:10',
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
            'name.unique' => 'Ca này đã có !'

        ];
    }
    public function attributes()
    {
        return [
            'code'=>'Ma nhan vien',
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