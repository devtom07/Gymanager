<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidateAddPt extends FormRequest
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
            'id_card'=>'required',
            'issued_on'=>'required|date|date_format:Y-m-d',
            'issued_by'=>'required',
            'gender'=>'required',
            'phone' => 'required|regex:/(0)[0-9]/|not_regex:/[a-z]/|min:9',
            'email' => 'required',
            'address' => 'required|min:5',
            'avatar' => 'required|image|mimes:jpeg,png,jpg',
            'contract' => 'required',
            'wage' => 'required',
            'status' => 'required',
            'start_day'=>'required|date|date_format:Y-m-d|',
            'end_day'=>'required|date|date_format:Y-m-d|after:start_day',
        ];
    }
    public function messages()
    {
        return [
            'required' => ':attribute không được để trống',
            'name.unique' => 'Ca này đã có !',
            'avatar.image' => 'bạn cần nhập đúng định dạng file ảnh',
            'end_day.after' => 'Phải sau thời gian bắt đầu',
            'address.min' => 'Địa chỉ ít nhất 5 ký tự',
        ];
    }
    public function attributes()
    {
        return [
            'code'=>'Mã nhân viên',
            'name' => 'Tên nhân viên',
            'avatar' => 'Ảnh đại diện',
            'id_card' => 'Số chứng minh thư',
            'issued_on' => 'Ngày ban hành',
            'issued_by' => 'Nới ban hành',
            'email' => 'email',
            'phone' => 'Số điện thoại',
            'address' => 'Địa chỉ',
            'contract' => 'Loại hợp đồng',
            'wage'=>'Mức lương',
            'start_day' => 'Ngày bắt đầu làm',
            'end_day' => 'Ngày kết thúc',
        ];
    }
}