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
            'name' => 'required|unique:staffs,name',
            'work_sift_id'=>'required:staffs,work_sift_id',
            'avatar' => 'required:staffs,avatar ',
            'phone' => 'required:staffs,phone',
            'email' => 'required:staffs,email',
            'address' => 'required:staffs,address',
            'contract' => 'required:staffs,contract',
            'wage' => 'required:staffs,wage',
            'title' => 'required:staffs,title',

        ];
    }
    public function messages()
    {
        return [
            'required' => ':attribute không được để trống',
            'name.unique' => 'Tên này đã có !'

        ];
    }
    public function attributes()
    {
        return [
            'name' => 'Tên nhân viên',
            'work_sift_id'=>'Thời gian làm việc',
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