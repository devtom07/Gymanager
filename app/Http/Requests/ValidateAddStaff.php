<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidateAddStaff extends FormRequest
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
            'avatar' => 'required|image',
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
            'name.unique' => 'Ca này đã có !',
             'avatar.image' => 'bạn cần nhập đúng định dạng file ảnh',

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